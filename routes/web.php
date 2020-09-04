<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::resource('docente', 'Auth\RegisDocenteController');

Route::get('docente', 'Auth\RegisDocenteController@index')->name('docente');

Route::post('auth/register_doc', 'Auth\RegisDocenteController@create')->name('register_docente');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nosotros', 'IniController@index')->name('nosotros');
Route::resource('soporte', 'SoporteController');

Route::resource('words', 'WordController');
Route::get('words', 'WordController@index')->name('words');
Route::get('alumno', 'WordController@chats')->name('words.chats');
Route::get('alumno/{id}', 'WordController@proyect')->name('words.proyect');

Route::resource('exercises', 'ExerciseController');
Route::get('docentes/{id}', 'ExerciseController@ofert')->name('exercises.ofert');
Route::post('postul/', 'ExerciseController@detal')->name('exercises.detal');
Route::resource('clases', 'ClaseController');

Route::resource('postulation', 'PostulationController');
Route::resource('pagos', 'PagoController');

Route::resource('avances', 'AvanceController');

Route::resource('subir', 'ArchivoController');
Route::resource('cuentas', 'CuentaController');
Route::resource('retiros', 'RetiroController');

//Chat rutas
//Route::get('/', 'MessageController@index');
Route::post('/messages', 'MessageController@fetch')->middleware('auth');
Route::put('/messages', 'MessageController@sentMessage')->middleware('auth');
Route::prefix('chat')->group(function () {
    Route::post('/new', 'MessageController@newChat')->middleware('auth');
    Route::get('/all', 'MessageController@chats')->middleware('auth');
});



Route::post('/paypal/pay', 'PaymentController@payWithPayPal')->name('paypal/pay');
Route::get('/paypal/status/{id}', 'PaymentController@payPalStatus');

Route::post('/payments/pay', 'Payment2Controller@pay')->name('pay');
Route::post('/payments/approval', 'Payment2Controller@approval')->name('approval');
Route::post('/payments/cancelled', 'PaymentController2@cancelled')->name('cancelled');

