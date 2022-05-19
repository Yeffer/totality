<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etarios extends Model
{
       protected $fillable = [
        'nombre',
    ];


    public function getRouteKeyName()
    {
        return 'url';
    }
}
