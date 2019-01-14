<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = "id";

    protected $fillable = [ //asigna los campos de la tabla de BD
        'nombre',
        'email',
        'telefono',
        'link_bitrix'
    ];

}
