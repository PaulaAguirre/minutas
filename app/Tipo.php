<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    protected $primaryKey = "id";

    protected $fillable = [ //asigna los campos de la tabla de BD
        'nombre',
        'descripcion',

    ];
}
