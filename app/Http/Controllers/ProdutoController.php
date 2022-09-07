<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::orderBy('nome', 'ASC')->get();
       return view('produto.produto_index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.produto_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

      $produto = new Produto;
      $produto->nome        = 'Shampoo';
      $produto->quantidade  = 10;
      $produto->valor       = 10;
      $produto->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // dd('entrou no show');
       $produto= Produto::find($id);
      // dd($produto);
      return view('produto.produto_show', ['produto' => $produto]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd('update');
        $produto= Produto::find(4);
        $produto->nome              = 'Shampoo Clear Men';
        $produto->quantidade        = 20;
        $produto->valor             = 200;
        $produto->save();
       //dd($produto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto= Produto::find($id);
        $produto->delete();
        //dd('teste');
    }
}
