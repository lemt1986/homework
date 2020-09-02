<?php

namespace App\Http\Controllers;

use App\archivo;
use Illuminate\Http\Request;
use Auth;
use DB;

class ArchivoController extends Controller
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

    public function index(Request $request)
    {
        $arc = DB::table('archivos')->where([['exer_id', $request->id_exer], ['teacher_id', Auth::user()->id]])->get();
        if (Auth::user()->rol == 2) {
            return view('alumnos.archivos.archivo', compact('arc'));
        }else{
            return view('docentes.achivos.archivo', compact('arc'));
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
            
            'exer_id' => 'required|string'
        
        ]);

        $archivo = new archivo;
        $archivo->archivo = $request->file('archivo')->store('public/archivo/');
        $archivo->exer_id = $request->exer_id;
        $archivo->teacher_id = Auth::user()->id;
        $archivo->save();

        //redireccion
        return redirect()->route('exercises.create')->with('mensaje', 'Subida de Archivo exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(archivo $archivo)
    {
        //
    }
}
