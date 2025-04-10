<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\BancoRequest;
use App\Models\Banco;
use Illuminate\Http\Request;
use stdClass;

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filtro = new stdClass;
        $filtro->codigo = $request->codigo ?? null;
        $filtro->banco = $request->banco ?? null;

        $dados["lista"] = Banco::filtro($filtro);
        $dados["filtro"] = $filtro;
        return View("Cadastro.Banco.Index", $dados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BancoRequest $request)
    {
        $req = $request->except(["_token"]);
        try {
            Banco::Create($req);
            return redirect()->route("banco.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
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
        $dados["banco"] = Banco::find($id);
        $dados["lista"] = Banco::get();
        return View('Cadastro.Banco.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BancoRequest $request, string $id)
    {
        $req = $request->except(["_token", "_method"]);
        try {
            Banco::find($id)->update($req);
            return redirect()->route("banco.index")->with("msg_sucesso", "Registro Alterado com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $banco = Banco::find($id);
            $banco->delete();
            return redirect()->route("banco.index")->with("msg_sucesso", "Registro Excluído com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
