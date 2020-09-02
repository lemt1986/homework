<?php

namespace App\Http\Controllers;

use App\cuenta;
use Illuminate\Http\Request;
use Auth;
use DB;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuen = DB::table('cuentas')->where('user_id', Auth::user()->id)->get();

         if ($cuen == '[]') {
           return view('docentes.cuenta.create');
        }else{
            return redirect()->route('retiros.index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $this->validate($request, [
            'name' => 'required|string',
            'banco' => 'required|string',
            'n_cuenta' => 'required|string',
            'tipo' => 'required|string'
        
        ]);
        //almacenamiento
            $user_id = Auth::user()->id;
            $cuenta = new cuenta;
            $cuenta->name = $request->name;
            $cuenta->banco = $request->banco;
            $cuenta->n_cuenta = $request->n_cuenta;
            $cuenta->tipo = $request->tipo;
            $cuenta->CCI = $request->CCI;
            $cuenta->user_id = Auth::user()->id;
            $cuenta->save();

        //redireccion
        return redirect()->route('retiros.index', compact('user_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(cuenta $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuenta $cuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuenta $cuenta)
    {
        //
    }
}
