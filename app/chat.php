<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    //a que tabla hace references
    protected $table = 'chats';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 "usuario", "de", "mensaje", "send" 
    ];

    public function exercise(){
    	$this->belongsTo('app\exercise');
    }
}
