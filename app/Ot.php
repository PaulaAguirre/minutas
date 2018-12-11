<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ot extends Model
{
    protected $table = 'ots';
    protected $primaryKey = "id";
    //public $timestamps = false; //laravel crea dos columnas que contienen informacion de cuando un registro se creó y se actualizó

    protected $fillable = [ //asigna los campos de la tabla de BD
        'codigo',
        'nombre',

    ];

    protected $guarded = [ //campos que no se quieren incluir

    ];

    public function conceptos()
    {
        return $this->hasMany ('App\Concepto');
    }
}
