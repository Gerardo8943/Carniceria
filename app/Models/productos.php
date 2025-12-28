<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = ['nombre','tipo','origen','precio','fecha_ingreso'];

    public function stock(){
        return $this->hasOne(stock::class);
    }

    public function retiros(){
        return $this->hasMany(retiros::class);
    }
}
