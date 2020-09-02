<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class retiro extends Model
{
    //a que tabla hace references
    protected $table = 'retiros';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'valor', 'banco', 'user_id', 
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
