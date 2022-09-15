

<!-- resources/views/produto_index.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p> Produto - Edit </p>
@endsection
 
@section('content')
    <p>Formulário</p>
   
    {!! Form::open(['url' => 'categoria/'. $categoria->id,'method' => 'put']) !!}
    
    {{ Form::label('nome', 'Nome:');}}<br>
    {{ Form::text('nome', $categoria->nome)}}<br>

    
    {{ Form::submit('Enviar')}}

{!! Form::close() !!}
 

       
@endsection