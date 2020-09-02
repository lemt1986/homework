<?php
 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
Use Image;
use App\User;
use DB;
use Auth;
use Illuminate\Http\Request;

class RegisDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login_d');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bandera = $request->bandera;
        $areas = DB::table('areas')->get();
        $habil = DB::table('skills')->get();
        return view('auth.register_doc', compact('areas', 'habil', 'bandera'));
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
            'name' => 'required|string',
            'DNI' => 'required|string', 
            'tel' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'password_c' => 'required|string',
            'univ' => 'required|string',
            'area' => 'required|string',
            'experiencia' => 'required|string',
            'habilidades' => 'required|string',
            'resenia' => 'required|string'
        
        ]);
        //almacenamiento
        $count = DB::table('users')->where('email', $request->email)->count();

        if ($count > 0) {
            return back()->with('mensaje2', 'El Correo que ingresaste ya se encuentra registrado!');
        }elseif ($request->password != $request->password_c) {
           return back()->with('mensaje2', 'Las contraseña no son iguales!');
        }else{

            DB::table('teachers')->insert(
                 ['univ' => $request->univ, 'area' => $request->area, 'experiencia' => $request->experiencia, 'habilidades' => $request->habilidades, 'cv' => $request->file('cv')->store('public/pdf/'), 'resenia' => $request->resenia, 'DNI' => $request->DNI, 'cod' => $request->cod,'created_at' => now(), 'updated_at' => now()]
                    );//creando perfil del profesor

            $user = new user;
            $user->name = $request->name;
            $user->DNI = $request->DNI;
            $user->tel = $request->tel;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->rol = "3";
            $user->status = "1";
            $user->save();

        //redireccion
        return redirect()->route('docente')->with('mensaje', 'Registro exitoso, ya puedes iniciar sesion!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
