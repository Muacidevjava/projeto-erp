<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $fillable=["id", "codigo", "banco"];

    public function contas(){
        return $this->hasMany(ContaCorrente::class);
    }
}
