<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Unidade;
use Illuminate\Http\Request;
use stdClass;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filtro                 = new stdClass;
        $filtro->categoria_id   = $request->categoria_id ?? null;
        $filtro->nome           = $request->nome ?? null;

        $dados["lista"]         = Produto::filtro($filtro);
        $dados["categorias"]    = Categoria::get();
        $dados["filtro"]        = $filtro;
        return View("Cadastro.Produto.Index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dados["categorias"] = Categoria::get();
        $dados["unidades"] = Unidade::get();
        $dados["produtoJs"] = true;
        $dados["categoriaJs"] = true;
        return View("Cadastro.Produto.Create", $dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->except(["_token"]);
           
            $req['estoque_inicial']	         = getFloat($req['estoque_inicial']);
            $req['estoque_maximo']	         = getFloat($req['estoque_maximo']);
            $req['estoque_minimo']	         = getFloat($req['estoque_minimo']);
            $req['preco_custo']	             = getFloat($req['preco_custo']);
            $req['margem_lucro']	         = getFloat($req['margem_lucro']);
            $req['preco_venda']	             = getFloat($req['preco_venda']);
            $req["status_id"]                = config('constantes.status.ATIVO');


            i($req);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
