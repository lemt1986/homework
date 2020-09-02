<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postulation extends Model
{
    //a que tabla hace references
    protected $table = 'postulations';
    //los campos que son asignable masivamente
    protected $fillable = [
    	'user_id', 'teacher_id', 'exer_id', 'precio', 'fecha', 
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
