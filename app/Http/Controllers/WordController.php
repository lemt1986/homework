<?php

namespace App\Http\Controllers;

use App\word;
use Illuminate\Http\Request;
use Auth;
use DB;

class WordController extends Controller
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

    public function chats()
    {
       $doc = DB::table('postulations') 
                ->join('users', 'postulations.teacher_id', '=', 'users.id')
                ->join('teachers', 'users.DNI', '=', 'teachers.DNI')
                ->join('exercises', 'postulations.exer_id', '=', 'exercises.id')
                ->select('users.name', 'postulations.precio', 'postulations.fecha', 'teachers.experiencia', 'teachers.univ', 'teachers.resenia', 'postulations.user_id', 'postulations.teacher_id', 'postulations.exer_id')->where([['postulations.user_id', Auth::user()->id], ['exercises.teacher', 0]])->get();
               
        $exercise = DB::table('exercises')->where([['user_id', Auth::user()->id], ['teacher', 0]])->get();
        $clase = DB::table('clases')->where('user_id', Auth::user()->id)->get(); 
        
        return view('alumnos.trabajos1', compact('exercise', 'clase', 'doc')); 
    }

    public function index()
    {
        $words = DB::table('words')->get();

        return view('alumnos.ejercicios', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'word' => 'required|string'
        
        ]);
        //almacenamiento
        
            $word = new word;
            $word->img = $request->file('img')->store('public/word/');
            $word->word = $request->word;
            $word->ruta = $request->ruta;
            $word->save();

        //redireccion
        return redirect()->route('home')->with('mensaje', 'Registro exitoso!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\word  $word
     * @return \Illuminate\Http\Response
     */
    public function proyect(Request $request)
    {
        $id = $request->id;
        $words = DB::table('words')->get();
        $exercise = DB::table('exercises')->where('user_id', Auth::user()->id)->get();
        $clase = DB::table('clases')->where('user_id', Auth::user()->id)->get();

        return view('alumnos.trabajos', compact('exercise', 'words', 'clase', 'id'));
    }

    public function show(word $word) 
    {
        $areas = DB::table('areas')->get();

        return view('alumnos.form.formEjercicio', compact('areas', 'word'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\word  $word
     * @return \Illuminate\Http\Response
     */
    public function edit(word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(word $word)
    {
        //
    }
}
