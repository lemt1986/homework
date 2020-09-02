<?php

namespace App\Http\Controllers;

use App\postulation;
use Illuminate\Http\Request;
use Auth;
use DB;

class PostulationController extends Controller
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
            'precio' => 'required|string',
            'fecha' => 'required|string'

        ]);
        //almacenamiento
            $postulation = new postulation;
            $postulation->user_id = $request->user_id;
            $postulation->teacher_id = Auth::user()->id;
            $postulation->exer_id = $request->exer_id;
            $postulation->precio = $request->precio;
            $postulation->fecha = $request->fecha;
            $postulation->save();

        //redireccion
        return redirect()->route('home')->with('mensaje', 'Te as Postulado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function show(postulation $postulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function edit(postulation $postulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postulation $postulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\postulation  $postulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(postulation $postulation)
    {
        //
    }
}
