<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\config;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use DB;

class PaymentController extends Controller
{
	private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $allowedPaymentMethods = config('services.enabled');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $request->validate([
        'payment_method' => [
            'required',
            Rule::in($allowedPaymentMethods),
        ],
        'terms' => 'accepted',
            ]);

    $order = $this->setUpOrder($preOrder, $request);

    $this->notify($order);
    $url = $this->generatePaymentGateway(
             $request->get('payment_method'), 
             $order
         );
    return redirect()->to($url);

        $this->apiContext->setConfig($payPalConfig['settings']);
         
    }

    public function payWithPayPal(Request $request)
    {
    	$precio = $request->precio;
    	
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($precio);
        $amount->setCurrency('USD');
 
        $transaction = new Transaction();
        $transaction->setAmount($amount);
        // $transaction->setDescription('See your IQ results');

        $callbackUrl = url('/paypal/status', ['id' => $request->id]);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }

     public function payPalStatus(Request $request)
    {
    	$paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect()->route('pagos.index')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() === 'approved') {

        	DB::table('exercises')
                ->where('id', $request->id)
                ->update(['status' => 2]);

            
            return redirect()->route('avances.index')->with('status', 'Gracias! El pago a través de PayPal se ha ralizado correctamente. ahora puedes comunicarte con tu Profesor.' );
        }

        
        return redirect()->route('pagos.index')->with('status', 'Lo sentimos! El pago a través de PayPal no se pudo realizar.');
    }

    protected function generatePaymentGateway($paymentMethod, Order $order) : string
{
    $method = new \App\PaymentMethods\MercadoPago;

    return $method->setupPaymentAndGetRedirectURL($order);
}
}
