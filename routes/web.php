<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

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

// -----------------------------------PRODUTOS--------------------
//listar todos os produtos
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

// create
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');


// store
Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store');

//edit
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
// update
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');

// delete
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');
// -----------------------------------PRODUTOS--------------------

// -----------------------------------CATEGORIAS--------------------

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

// create
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');


// store
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

//edit
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
// update
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

// delete
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');

// -----------------------------------CATEGORIAS--------------------

// create
//Route::get('/produtocreate', [ProdutoController::class,'create']);

    // exibir produtos
//Route::get('/categoria/{id}', [ProdutoController::class, 'show']);


    //insere / cria um produto [POST]
//Route::get('/produtostore', [ProdutoController::class,'store']);

    //alterar produto
//Route::get('/produtoupdate', [ProdutoController::class,'update']);

    // excluir produto
//Route::get('/produtodestroy/{id}', [ProdutoController::class,'destroy']);


//Route::put('/produto/{id}',[ProdutoController::class, 'update'])->name('produto.update');


/*criar web/ criar migrate no terminal php artisan migrate:refresh --seed/ migrate/ seeds criar uma categoria /
criar um model/  no 
ctrl f para substituir as palavras de acordo/ */