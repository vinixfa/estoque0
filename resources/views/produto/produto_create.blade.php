

<!-- resources/views/produto_index.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent

 
@section('content')
 
   

    <p> Produto - create  </p>

    <p>Formulário</p>

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
   
    {!! Form::open(['url' => 'produto/create']) !!}
    
    {{ Form::label('nome', 'Nome:')}}<br><br>
    {{ Form::text('nome')}}<br>

    {{ Form::label('quantidade', 'Quantidade:')}}<br>
    {{ Form::text('quantidade')}}<br>

    {{ Form::label('valor', 'Valor:')}}<br><br>
    {{ Form::text('valor')}}<br><br>

    {{ Form::submit('Enviar')}}

{!! Form::close() !!}
 

       
@endsection