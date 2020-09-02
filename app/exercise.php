<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exercise extends Model
{
     //a que tabla hace references
    protected $table = 'exercises';
    //los campos que son asignable masivamente
    protected $fillable = [
    	'facultad', 'ciclo', 'materia', 'nombre_proyecto', 'fecha_entr', 'archivo', 'descripcion', 'n_pag', 'interli', 'bibliografia', 'referencia','status', 'user_id', 'teacher',
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }

    public function chats(){
        $this->hasMany('app\chat');
    }
}
