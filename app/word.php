<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class word extends Model
{
    //a que tabla hace references
    protected $table = 'words';
    //los campos que son asignable masivamente
    protected $fillable = [
    	'img', 'word', 'ruta',
    ];

    
}
