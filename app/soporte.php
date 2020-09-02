<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soporte extends Model
{
    //a que tabla hace references
    protected $table = 'soportes';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'mensaje', 'user_id', 'send', 
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
