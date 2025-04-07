<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Service\UtilService;
use Illuminate\Http\Request;
use stdClass;

class UtilController extends Controller
{
   public function buscarCNPJ($cnpj)
{
    $retorno = new \stdClass;

    // Validação simples
    $validator = Validator::make(['cnpj' => $cnpj], [
        'cnpj' => 'required|digits:14'
    ]);

    if ($validator->fails()) {
        $retorno->tem_erro = true;
        $retorno->erro = "CNPJ inválido.";
        return response()->json($retorno);
    }

    try {
        $empresa = UtilService::buscarCNPJ($cnpj);
        $retorno->tem_erro = false;
        $retorno->retorno = $empresa;
    } catch (\Throwable $th) {
        $retorno->tem_erro = true;
        $retorno->erro = $th->getMessage();
    }

    return response()->json($retorno);
}

}
