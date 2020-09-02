<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clase extends Model
{
     //a que tabla hace references
    protected $table = 'clases';
    //los campos que son asignable masivamente
    protected $fillable = [
    	'faculta', 'ciclo', 'materia', 'frecuencia', 'fecha_entr', 'hora', 'archivo', 'status', 'user_id', 'teacher',
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
