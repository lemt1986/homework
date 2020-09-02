<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    //a que tabla hace references
    protected $table = 'cuentas';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'name', 'banco', 'n_cuenta', 'tipo', 'CCI', 'user_id',
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
