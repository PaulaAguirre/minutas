<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    protected $table = 'conceptos';
    protected $primaryKey = "id";
    //public $timestamps = false; //laravel crea dos columnas que contienen informacion de cuando un registro se creó y se actualizó

    protected $fillable = [ //asigna los campos de la tabla de BD
        'ot_id',
        'descripcion',
        'proveedor',
        'ingreso_proyectado',
        'egreso_proyectado'
    ];

    protected $guarded = [ //campos que no se quieren incluir

    ];

    public function ot()
    {
        return $this->belongsTo ('App\Ot');
    }

    public function historiales()
    {
        return $this->hasMany ('App\Historial');
    }
}
