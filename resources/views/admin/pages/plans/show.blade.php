@extends('adminlte::page')

@section('title', "Detalhes do Plano {{ $plan->name}}")

@section('content_header')
    <h1><strong>{{ $plan->name }}</strong></h1>
@stop

@section('content')
    <div class="card text-left">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <ul>
            <li><strong>Nome: </strong>{{ $plan->name }}</li>
        </ul>
        <ul>
            <li><strong>URL: </strong> {{ $plan->url }}</li>
        </ul>
        <ul>
            <li><strong>Preço: </strong> R$ {{ number_format($plan->price, 2, ',', '.') }}</li>
        </ul>
        <ul>
            <li><strong>Descrição: </strong>{{ $plan->descricao }}</li>
        </ul>

        <form action="{{ route('plans.destroy', $plan->url) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">EXCLUIR: <strong>{{ $plan->name }}</strong></button>
        </form>
      </div>
    </div>
@stop