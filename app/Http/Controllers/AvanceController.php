<?php

namespace App\Http\Controllers;

use App\avance;
use Illuminate\Http\Request;
use DB;
use Auth;

class AvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $exer = DB::table('exercises')->where([['user_id', Auth::user()->id], ['status', 2]])->get();
          
        
        return view('alumnos.avances.avance', compact('exer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       /* $exer = DB::table('exercises')->where([['user_id', Auth::user()->id], ['status', 2]])->get();

         $chat = DB::table('chats')->where([['usuario', $request->teacher], ['de', Auth::user()->id]])->get();

         $user = DB::table('users')->select('name', 'id')->where('id', $request->teacher)->get();


          return view('alumnos.avances.avance', compact('exer', 'chat', 'user'));*/

    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $exer = DB::table('exercises')->where([['user_id', Auth::user()->id], ['status', 2]])->get();

         $chat = DB::table('chats')->where([['usuario', $request->id_teacher], ['de', Auth::user()->id]])->get();

         $user = DB::table('users')->select('name', 'id')->where('id', $request->id_teacher)->get();

            return view('alumnos.avances.avance', compact('exer', 'chat', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function show(avance $avance)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function edit(avance $avance)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, avance $avance)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\avance  $avance
     * @return \Illuminate\Http\Response
     */
    public function destroy(avance $avance)
    {
        
    }
}
