

<!-- resources/views/produto_index.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p> Produto - Show</p>
@endsection
 
@section('content')
    <p>Conteúdo.</p>
   
 <p><strong>id</strong> {{$produto->id }}</p>
 <p><strong>Nome</strong> {{$produto->nome }}</p>
 <p><strong>Quantidade</strong> {{$produto->quantidade }}</p>
 <p><strong>Valor</strong> {{$produto->valor }}</p>
 <p><strong>Criação</strong> {{$produto->created_at}}</p>

       
@endsection