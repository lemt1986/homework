<?php

namespace App\Http\Controllers;

use App\pago;
use Illuminate\Http\Request;
use Auth;
use DB;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exer = DB::table('exercises')
                ->join('users', 'exercises.teacher', '=', 'users.id')
                ->select('users.name', 'exercises.materia', 'exercises.nombre_proyecto', 'exercises.ofert_fin', 'exercises.fecha_entr', 'exercises.user_id', 'exercises.teacher', 'exercises.id')->where([['exercises.status', 2], ['user_id', Auth::user()->id]])->get();

        return view('alumnos.pagos.pagar', compact('exer'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(pago $pago)
    {
        //
    }
}
