<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //a que tabla hace references
    protected $table = 'teachers';
    //los campos que son asignable masivamente
    protected $fillable = [
    	'univ', 'area', 'experiencia', 'habilidades', 'cv', 'resenia', 'DNI'
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
