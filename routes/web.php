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

// CRUD

Route::get('/', function () {
    return view('welcome');
});

    // lista de produtos
Route::get('/produto', [ProdutoController::class, 'index']) ->name('produto.index');

    // create
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
     
    // store
     Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store');

    //edit
    Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');


// create
Route::get('/produtocreate', [ProdutoController::class,'create']);

    // exibir produtos
Route::get('/produto/{id}', [ProdutoController::class, 'show']);


    //insere / cria um produto [POST]
Route::get('/produtostore', [ProdutoController::class,'store']);

    //alterar produto
Route::get('/produtoupdate', [ProdutoController::class,'update']);

    // excluir produto
Route::get('/produtodestroy/{id}', [ProdutoController::class,'destroy']);


Route::put('/produto/{id}',[ProdutoController::class, 'update'])->name('produto.update');