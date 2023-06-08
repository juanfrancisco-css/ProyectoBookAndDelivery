<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'direccion',
        'platos',
        'importe',
        'enviado',
    ];

    protected $casts = [
        'platos' => 'array',
    ];
}
