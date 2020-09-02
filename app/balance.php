<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class balance extends Model
{
    //a que tabla hace references
    protected $table = 'balances';
    //los campos que son asignable masivamente
    protected $fillable = [
    	 'balance', 'user_id',
    ];

    public function user(){
    	$this->belongsTo('app\user');
    }
}
