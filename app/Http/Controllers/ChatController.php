<?php

namespace App\Http\Controllers;

use App\chat;
use Illuminate\Http\Request;
use DB;
use Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $exer = DB::table('exercises')
                ->join('archivos', 'exercises.id', '=', 'archivos.exer_id')
                ->select('exercises.nombre_proyecto', 'exercises.fecha_entr', 'exercises.updated_at', 'exercises.teacher', 'archivos.archivo', 'archivos.created_at')
                ->where([['user_id', Auth::user()->id], ['status', 2]])->get();


            $chat = DB::table('chats')->where([['para', $request->id_teacher], ['de', Auth::user()->id]])->get();
            return view('alumnos.avances.avance', compact('exer', 'chat'));
        
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
            
            'message' => 'required|string'
            
        
        ]);

        if (Auth::user()->rol == 3) {
            $chat = new chat;
            $chat->message = $request->message;
            $chat->para = Auth::user()->id;
            $chat->de = $request->de;
            $chat->send = Auth::user()->id;
            $chat->save();

        //redireccion
        return back();
        }else{
        $chat = new chat;
        $chat->message = $request->message;
        $chat->para = $request->para;
        $chat->de = Auth::user()->id;
        $chat->send = Auth::user()->id;
        $chat->save();

        //redireccion
        return redirect()->route('avances.index')->with('mensaje', 'Subida de Archivo exitoso!');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(chat $chat)
    {
        //
    }
}
