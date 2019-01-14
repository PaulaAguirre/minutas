<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuta extends Model
{
    protected $table = 'minutas';
    protected $primaryKey = "id";

    protected $fillable = [ //asigna los campos de la tabla de BD
        'user_id',
        'tipo_id',
        'hora',
        'plan',
        'dificultades',
        'competencias',
    ];

    public function user()
    {
        return $this->belongsTo ('App\User');
    }

    public function cliente()
    {
        return $this->belongsTo ('App\Cliente');
    }

    public function tipo()
    {
        return $this->belongsTo ('App\Tipo');
    }
}
