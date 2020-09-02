<?php

namespace App\Http\Controllers;

use App\exercise;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use Auth;
use DB;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = DB::table('teachers')->where('DNI', Auth::user()->DNI)->get();
        foreach ($teacher as $te )  
 
        $exer = DB::table('exercises')
                ->join('users', 'exercises.user_id', '=', 'users.id')
                ->select('users.name', 'exercises.fecha_entr', 'exercises.archivo', 'exercises.id', 'exercises.user_id')
                ->where([['facultad', $te->area], ['exercises.status', 1]])->get();
        return view('docentes.oferta', compact('exer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 

        $exer = DB::table('exercises') 
                ->join('areas', 'exercises.facultad', '=', 'areas.id')
                ->select('areas.area', 'exercises.nombre_proyecto', 'exercises.materia', 'exercises.id', 'exercises.user_id', 'exercises.fecha_entr', 'exercises.updated_at')
                ->where('teacher', Auth::user()->id)->get();   

        if ($request->de) {

            $chat = DB::table('chats')->where([['para', Auth::user()->id], ['de', $request->de]])->get();
            $user = DB::table('users')->select('name', 'id')->where('id', $request->de)->get();
            
            return view('docentes.buzon.excer', compact('exer', 'chat', 'user'));

        }else{
            return view('docentes.buzon.excer', compact('exer'));
        }

        
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
            'ciclo' => 'required|string',
            'materia' => 'required|string',
            'nombre_proyecto' => 'required|string',
            'fecha_entr' => 'required|string',
            'descripcion' => 'required|string'
        
        ]);
        //almacenamiento
       
            $exercise = new exercise;
            $exercise->facultad = $request->facultad;
            $exercise->ciclo = $request->ciclo;
            $exercise->materia = $request->materia;
            $exercise->f_pagos = $request->f_pagos;
            $exercise->nombre_proyecto = $request->nombre_proyecto;
            $exercise->fecha_entr = $request->fecha_entr;
            $exercise->archivo = $request->file('archivo')->store('public/exercise/');
            $exercise->descripcion = $request->descripcion;
            $exercise->n_pag = $request->n_pag;
            $exercise->interli = $request->interli;
            $exercise->bibliografia = $request->bibliografia;
            $exercise->referencia = $request->referencia;
            $exercise->status = "1";
            $exercise->user_id = Auth::user()->id;
            $exercise->teacher = "0";
            $exercise->save();

        //redireccion
        return redirect()->route('words')->with('mensaje', 'Registro exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function ofert(Request $request)
    {
        $exer = DB::table('exercises')
                ->join('areas', 'exercises.facultad', '=', 'areas.id')
                ->select('areas.area', 'exercises.ciclo', 'exercises.nombre_proyecto', 'exercises.materia', 'exercises.fecha_entr', 'exercises.teacher', 'exercises.n_pag', 'exercises.interli', 'exercises.referencia', 'exercises.bibliografia', 'exercises.ofert_fin', 'exercises.id', 'exercises.descripcion')
                ->where('exercises.id', $request->id)->get();

        return view('docentes.proyecto.postular', compact('exer'));
    }

    public function detal(Request $request)
    {
        
        $exer = DB::table('exercises')
                ->join('areas', 'exercises.facultad', '=', 'areas.id')
                ->select('areas.area', 'exercises.ciclo', 'exercises.materia', 'exercises.fecha_entr', 'exercises.teacher', 'exercises.ofert_fin', 'exercises.id')
                ->where('exercises.id', $request->id_exer)->get();

        DB::table('exercises')
                ->where('id', $request->id_exer)
                ->update(['teacher' => $request->id_doc,
                         'fecha_entr' => $request->fecha,
                            'ofert_fin' => $request->precio]
                        );

        DB::table('postulations')->where('exer_id',$request->id_exer)->delete();

       return view('alumnos.postul.exercise', compact('exer'));
    }

    public function show(exercise $exercise)
    {
        $doc = DB::table('postulations')
                ->join('users', 'postulations.teacher_id', '=', 'users.id')
                ->join('teachers', 'users.DNI', '=', 'teachers.DNI')
                ->select('users.name', 'postulations.precio', 'postulations.fecha')->where('exer_id', $exercise->id)->get();
        return view('alumnos.postul.exercise', compact('doc'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(exercise $exercise)
    {
        //
    }
}
