<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    protected $table = 'oportunidades';
    protected $primaryKey = "id";

    protected $fillable = [ //asigna los campos de la tabla de BD
        'nombre',
        'descripcion',

    ];
}
