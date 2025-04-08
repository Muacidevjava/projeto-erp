<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use Illuminate\Http\Request;
use stdClass;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro                = new stdClass;
        $filtro->nome          = $request->nome ?? null;
        $filtro->cpf           = $request->cpf ?? null;
        $filtro->email         = $request->email ?? null;

        $dados["lista"] = Fornecedor::filtro($filtro);
        $dados["filtro"] = $filtro;
        return View("Cadastro.Fornecedor.Index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dados["fornecedorJs"] = true;
        return View("Cadastro.Fornecedor.Create", $dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->except(["_token"]);
        try {
            $req["status_id"]                = config('constantes.status.ATIVO');
            Fornecedor::Create($req);
            return redirect()->route("fornecedor.index")->with("msg_sucesso", "inserido com sucesso");
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
