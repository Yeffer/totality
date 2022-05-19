<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
     protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'identificacion',
        'genero',
        'fch_nacimiento',
        'salon_id',
        'profesor_id',
    ];


    public function getRouteKeyName()
    {
        return 'url';
    }
}
