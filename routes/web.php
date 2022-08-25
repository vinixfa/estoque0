<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 
Route::get('/', function () {
    return view('welcome');
});

    // lista de produtos
Route::get('/produto', [ProdutoController::class, 'index']);

    // exibir produtos
Route::get('/produto/{id}', [ProdutoController::class, 'show']);

    //insere / cria um produto [POST]
Route::get('/produtostore', [ProdutoController::class,'store']);

//alterar produto
Route::get('/produtoupdate', [ProdutoController::class,'update']);

// excluir produto
Route::get('/produtodestroy', [ProdutoController::class,'destroy']);
