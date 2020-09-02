<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    //a que tabla hace references
    protected $table = 'areas';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'area', 
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
