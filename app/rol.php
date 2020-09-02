<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    //a que tabla hace references
    protected $table = 'rols';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'rol', 
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
