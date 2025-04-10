<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Models\Transportadora;
use Illuminate\Http\Request;
use stdClass;

class TransportadoraController extends Controller
{
    public function index()
    {
        $filtro                = new stdClass;
        $filtro->nome          = $request->nome ?? null;
        $filtro->cpf           = $request->cpf ?? null;
        $filtro->email         = $request->email ?? null;

        $dados["lista"] = Transportadora::filtro($filtro);
        $dados["filtro"] = $filtro;
        return View("Cadastro.transportadora.Index", $dados);
       
       
    }

    public function create()
    {
        $dados["transportadoraJs"] = true;
        return View("Cadastro.Transportadora.Create", $dados);
    }

    public function store(Request $request)
    {
        $req = $request->except(["_token"]);
        try {
            $req["status_id"]                = config('constantes.status.ATIVO');
            Transportadora::create($req);
            return redirect()->route("transportadora.index")->with("msg_sucesso", "inserido com sucesso");
        } catch (\Throwable $th) {
            return redirect()->route("transportadora.index")->with("msg_erro", "erro ao inserir");
        }
        
    }

    public function edit(string $id)
    {
        $dados["transportadora"]   = Transportadora::find($id);
        $dados["trasnportadoraJs"] = true;
        return View("Cadastro.transportadora.Create", $dados);
    }

    public function update(Request $request, string $id)
    {
        try {
            $req = $request->except(['_token', '_method']);
            $fornecedor = Transportadora::findOrFail($id);
            $fornecedor->update($req);
    
            return redirect()->route("transportadora.index")->with("msg_sucesso", "atualizado com sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            $fornecedor = Transportadora::find($id);
            $fornecedor->delete();
            return redirect()->route("transportadora.index")->with("msg_sucesso", "excluido com sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
       
    }
}