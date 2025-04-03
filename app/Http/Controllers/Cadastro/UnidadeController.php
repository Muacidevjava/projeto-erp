<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\UnidadeRequest;
use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $lista = Unidade::all(); // Busca todas as unidades
        return view("Cadastro.Unidade.Index", compact("lista"));
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
    public function store(UnidadeRequest $request)
    {
        $req = $request->except(["_token"]);
        try {
            Unidade::Create($req);
            return redirect()->route("unidade.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
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
        
        $dados["unidade"] = Unidade::find($id);
        $dados["lista"] = Unidade::get();
        return View('Cadastro.Unidade.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnidadeRequest $request, string $id)
    {
        $req = $request->except(["_token", "_method"]);
        try {
            Unidade::find($id)->update($req);
            return redirect()->route("unidade.index")->with("msg_sucesso", "Registro Alterado com Sucesso");
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
            $unidade = Unidade::find($id);
            $unidade->delete();
            return redirect()->route("unidade.index")->with("msg_sucesso", "Registro Excluído com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
