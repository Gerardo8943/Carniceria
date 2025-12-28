<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = ['producto_id', 'cantidad'];

    public function productos(){
        return $this->belongsTo(productos::class);
    }
}
