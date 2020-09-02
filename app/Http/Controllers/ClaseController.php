<?php

namespace App\Http\Controllers;

use App\clase;
use Illuminate\Http\Request;
use Auth;
use DB;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'facultad' => 'required|string',
            'fecha_entr' => 'required|string',
            'ciclo' => 'required|string',
            'hora' => 'required|string',
            'materia' => 'required|string',
            'frecuencia' => 'required|string'
            
            
        
        ]);
        //almacenamiento
            $clase = new clase;
            $clase->facultad = $request->facultad;
            $clase->ciclo = $request->ciclo;
            $clase->materia = $request->materia;
            $clase->frecuencia = $request->frecuencia;
            $clase->fecha_entr = $request->fecha_entr;
            $clase->hora = $request->hora;
            $clase->archivo = $request->file('archivo')->store('public/chat/'); 
            $clase->status = "1";
            $clase->user_id = Auth::user()->id;
            $clase->teacher = "0";
            $clase->save();

        //redireccion
        return redirect()->route('words')->with('mensaje', 'Registro exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(clase $clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit(clase $clase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clase $clase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function destroy(clase $clase)
    {
        //
    }
}
