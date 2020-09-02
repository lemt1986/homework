<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    //a que tabla hace references
    protected $table = 'skills';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'habilidad', 
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
