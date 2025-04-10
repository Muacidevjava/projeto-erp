<?php

use App\Http\Controllers\Cadastro\BancoController;
use App\Http\Controllers\Cadastro\CategoriaController;
use App\Http\Controllers\Cadastro\ClienteController;
use App\Http\Controllers\Cadastro\ContaCorrenteController;
use App\Http\Controllers\Cadastro\FornecedorController;
use App\Http\Controllers\Cadastro\ProdutoController;
use App\Http\Controllers\Cadastro\StatusController;
use App\Http\Controllers\Cadastro\TipoContaCorrenteController;
use App\Http\Controllers\Cadastro\TransportadoraController;
use App\Http\Controllers\Cadastro\UnidadeController;
use App\Http\Controllers\Cadastro\VendedorController;
use App\Http\Controllers\Estoque\EntradaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource("/status", StatusController::class);
Route::resource("/categoria", CategoriaController::class);
Route::resource("/unidade", UnidadeController::class);
Route::resource("/banco", BancoController::class);
Route::resource("/tipocontacorrente", TipoContaCorrenteController::class);
Route::resource("/contacorrente", ContaCorrenteController::class);
Route::get("/produto/pesquisa",[ProdutoController::class,"pesquisa"])->name('produto.pesquisa');
Route::resource("/produto", ProdutoController::class);
Route::post("/categoria/salvarJs", [CategoriaController::class, "salvarJs"])->name('categoria.salvarJs');
Route::resource("/cliente", ClienteController::class);
Route::get("/util/buscarcnpj/{cnpj}", [UtilController::class, "buscarCNPJ"])->name("buscarCNPJ");
Route::resource("/fornecedor", FornecedorController::class);
Route::resource("/vendedor", VendedorController::class);
Route::resource('transportadora', TransportadoraController::class);
Route::get("/entrada", [EntradaController::class,"index"])->name("entrada.index");





