<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class retiros extends Model
{
    protected $fillable = ['producto_id', 'cantidad','destino', 'direccion_destino','fecha_retiro'];
}
