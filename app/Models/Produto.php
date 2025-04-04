<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable=[
        "id", "status_id", "categoria_id", "codigo_barra",
        "nome","gtin","imagem","origem","unidade","preco_venda",
        "preco_custo", "margem_lucro","estoque_minimo","estoque_maximo",
        "estoque_reservado", "estoque_inicial","estoque_atual","ncm",
        "cest","usa_grade","sku","eh_produto","eh_insumo", 'preco_alto',
        'largura', 'comprimento', 'altura', 'peso_liquido', 'peso_bruto', 'descricao',
        'descricao', 'views', 'promocao', 'destaque', 'lancamento'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
