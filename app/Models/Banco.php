<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'banco'];

    public function scopeFiltro($query, $filtro)
    {
        if($filtro->codigo) {
            $query->where('codigo', 'like', '%' . $filtro->codigo . '%');
        }
        
        if($filtro->banco) {
            $query->where('banco', 'like', '%' . $filtro->banco . '%');
        }
        
        return $query->get();
    }
}
