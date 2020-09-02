<?php

namespace App\Http\Controllers;

use App\retiro;
use Illuminate\Http\Request;
use Auth;
use DB;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $bal = DB::table('balances')->where('user_id', Auth::user()->id)->get();
        $ret = DB::table('retiros')->where('user_id', Auth::user()->id)->get();

       // return $bal;
        return view('docentes.retiros.create', compact('bal', 'ret'));
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
     * @param  \App\retiro  $retiro
     * @return \Illuminate\Http\Response
     */
    public function show(retiro $retiro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\retiro  $retiro
     * @return \Illuminate\Http\Response
     */
    public function edit(retiro $retiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\retiro  $retiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, retiro $retiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\retiro  $retiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(retiro $retiro)
    {
        //
    }
}
