

<!-- resources/views/produto_index.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p> categoria - Show</p>
@endsection
 
@section('content')
    <p>Conteúdo.</p>
   
 <p><strong>id</strong> {{$categoria->id }}</p>
 <p><strong>Nome</strong> {{$categoria->nome }}</p>


       
@endsection