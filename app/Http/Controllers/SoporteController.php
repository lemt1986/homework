<?php

namespace App\Http\Controllers;

use App\soporte;
use Illuminate\Http\Request;
use Auth;
use BD;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('soporte');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soporte1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'mensaje' => 'required|string'
        
        ]);

        $soporte = new soporte;
        $soporte->mensaje = $request->mensaje;
        $soporte->user_id = Auth::user()->id;
        $soporte->send =  Auth::user()->id;
        $soporte->save();

        //redireccion
        return redirect()->route('soporte.create')->with('mensaje', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function show(soporte $soporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function edit(soporte $soporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soporte $soporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\soporte  $soporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(soporte $soporte)
    {
        //
    }
}
