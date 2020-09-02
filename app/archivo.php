<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivo extends Model
{
    //a que tabla hace references
    protected $table = 'archivos';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'archivo', 'exer_id', 'teacher_id',
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
