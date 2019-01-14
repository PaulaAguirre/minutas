<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = "id";

    protected $fillable = [ //asigna los campos de la tabla de BD
        'ruc',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'tipo',
        'segmento',
        'empresa_id',
        'link_bitrix'
    ];

    public function empresa()
    {
        return $this->belongsTo ('App\Empresa');
    }
}
