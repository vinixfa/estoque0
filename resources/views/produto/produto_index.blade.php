

<!-- resources/views/produto_index.blade.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p> Produto - index</p>
@endsection
 
@section('content')

@if (session('status'))
    <div class=" alert-sucess" role="alert">
        {{session('status')}}
    </div>

@endif


<a href="{{ url('produto/create')}}"> Criar</a>
    <p>Conteúdo</p>
   

        <table>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>

        @foreach ($produtos as $value)
        
        <tr>
            <td>{{ $value->nome         }}</td>
            <td>{{ $value->quantidade   }}</td>
            <td>{{ $value->valor        }}</td>
            <td><a href="{{ url('produto/' . $value->id)}}"> Visualizar</a></td>
            <td><a href="{{ url('produto/' . $value->id . '/edit')}}"> Editar</a></td>
            <td>
                {!! Form::open(['url' => 'produto/'. $value->id,'method' => 'delete']) !!}       
                {{ Form::submit('Deletar')}}
                {!! Form::close() !!}
            </td>
        </tr>

        @endforeach

       
        </table>
@endsection