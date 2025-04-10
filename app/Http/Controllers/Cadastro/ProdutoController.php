<?php

namespace App\Http\Controllers\Cadastro;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
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
    public function store(ProdutoRequest $request)
    {
        $req = $request->except(["_token"]);
        try {
            $req['estoque_inicial']	         = getFloat($req['estoque_inicial']);
            $req['estoque_maximo']	         = getFloat($req['estoque_maximo']);
            $req['estoque_minimo']	         = getFloat($req['estoque_minimo']);
            $req['preco_custo']	             = getFloat($req['preco_custo']);
            $req['margem_lucro']	         = getFloat($req['margem_lucro']);
            $req['preco_venda']	             = getFloat($req['preco_venda']);
            $req["status_id"]                = config('constantes.status.ATIVO');
            if($request->hasFile('imagem') && $request->imagem->isValid()){
                $file = $request->file("imagem");
                $req["imagem"] = $file->store("upload/produtos");
            }
            Produto::Create($req);
            return redirect()->route("produto.index")->with("msg_sucesso", "inserido com sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());

        }

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
        $dados["produto"]       = Produto::find($id);
        $dados["categorias"]    = Categoria::get();
        $dados["unidades"]      = Unidade::get();
        $dados["categoriaJs"]   = true;
        $dados["produtoJs"]     = true;
        return View("Cadastro.Produto.Edit", $dados);
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $req = $request->except(["_token","estoque_inicial"]);
        try {
            $req['estoque_maximo']	         = getFloat($req['estoque_maximo']);
            $req['estoque_minimo']	         = getFloat($req['estoque_minimo']);
            $req['preco_custo']	             = getFloat($req['preco_custo']);
            $req['margem_lucro']	         = getFloat($req['margem_lucro']);
            $req['preco_venda']	             = getFloat($req['preco_venda']);
            $req["status_id"]                = config('constantes.status.ATIVO');
            $produto = Produto::find($id);
            if($request->hasFile('imagem') && $request->imagem->isValid()){
                $file = $request->file("imagem");
                $req["imagem"] = $file->store("upload/produtos");
            }
            $produto->update($req);
            return redirect()->route("produto.index")->with("msg_sucesso", "inserido com sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function pesquisa(){
        $q = $_GET["q"];
        $produtos = Produto::where("nome", "like","%$q%")->get();

        return response()->json($produtos);
    }
  
        public function destroy(string $id)
        {
            try {
                $produto = Produto::find($id);
        
                if (!$produto) {
                    return redirect()->back()->with("msg_erro", "Produto não encontrado.");
                }
        
                if (!empty($produto->imagem) && Storage::exists($produto->imagem)) {
                    Storage::delete($produto->imagem);
                }
        
                $produto->delete();
        
                return redirect()->route("produto.index")->with("msg_sucesso", "Produto excluído com sucesso.");
            } catch (\Throwable $th) {
                Log::error("Erro ao excluir produto: " . $th->getMessage());
        
                return redirect()->back()->with("msg_erro", "Erro ao excluir produto. Tente novamente.");
            }
        }
        
    }
    

