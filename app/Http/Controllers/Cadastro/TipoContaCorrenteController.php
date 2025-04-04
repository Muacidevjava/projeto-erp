<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoContaCorrenteRequest;
use App\Models\TipoContaCorrente;
use Illuminate\Http\Request;

class TipoContaCorrenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"] = TipoContaCorrente::get();
        return View("Cadastro.TipoContaCorrente.Index", $dados);
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
    public function store(Request $request)
    {
        // Remove o _token e garante que os valores estão no formato correto
        $req = $request->except(["_token"]);

        // Converter strings vazias para null e garantir que números são inteiros
        foreach ($req as $key => $value) {
            if (is_numeric($value)) {
                $req[$key] = (int) $value;
            } elseif ($value === "") {
                $req[$key] = null;
            }
        }
    
        try {
            TipoContaCorrente::create($req);
            return redirect()->route("tipocontacorrente.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
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
        $dados["tipocontacorrente"] = TipoContaCorrente::find($id);
        $dados["lista"] = TipoContaCorrente::get();
        return View('Cadastro.TipoContaCorrente.Index', $dados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoContaCorrenteRequest $request, string $id)
    {
        $req = $request->except(["_token", "_method"]);
        try {
            TipoContaCorrente::find($id)->update($req);
            return redirect()->route("tipocontacorrente.index")->with("msg_sucesso", "Registro Alterado com Sucesso");
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
            $tipo = TipoContaCorrente::find($id);
            $tipo->delete();
            return redirect()->route("tipocontacorrente.index")->with("msg_sucesso", "Registro Excluído com Sucesso");
        } catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
