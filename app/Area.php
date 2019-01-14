<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $primaryKey = "id";

    protected $fillable = [ //asigna los campos de la tabla de BD
        'nombre',
        'descripcion',

    ];

    public function users ()
    {
        return $this->hasMany ('App\User');
    }
}
