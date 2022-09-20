

<!-- resources/views/produto_index.blade.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p> categoria - index</p>
@endsection
 
@section('content')

@if (session('status'))
    <div class=" alert-sucess" role="alert">
        {{session('status')}}
    </div>

@endif



<a href="{{ url('categoria/create')}}"> Criar</a>
    <p>Conteúdo</p>
   

        <table>
        <tr>
            <th>Nome</th>
        
        </tr>

        @foreach ($categorias as $value)
        
        <tr>
            <td>{{ $value->nome         }}</td>
            <td><a href="{{ url('categoria/' . $value->id)}}"> Visualizar</a></td>
            <td><a href="{{ url('categoria/' . $value->id . '/edit')}}"> Editar</a></td>
            <td>
                {!! Form::open(['url' => 'categoria/'. $value->id,'method' => 'delete']) !!}       
                {{ Form::submit('Deletar')}}
                {!! Form::close() !!}
            </td>
        </tr>

        @endforeach
<!-- vinicius -->
        </table>
@endsection