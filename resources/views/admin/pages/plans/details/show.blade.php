@extends('adminlte::page')

@section('title', "Visualizaão do Detalhe {$detail->name} do Plano {$plan->name}")

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
    <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{$plan->name}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class="active">Visualizar</a></li>
</ol>
<h1>Visualização do Detalhe {{$detail->name}} do Plano {{$plan->name}} </h1>
@stop

@section('content')
    <div class="card text-left">
      <div class="card-body">
        <ul>
            <li>
                <strong>Name: </strong> {{$detail->name}}
            </li>
        </ul>

    </div>
    </div>
@stop
