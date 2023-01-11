@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}" class="active">Planos</a></li>
    </ol>
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.search') }}" method="post" class="form form-check-inline">
                @csrf
                <input type="text" name="pesquisar" class="form-control" placeholder="Nome" size="10" value="{{ $pesquisa['pesquisar'] ?? '' }}">
                <button type="submit" class="btn badge-dark">Pesquisar</button>
            </form>
        </div>
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width="200">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)   
                    <tr>
                        <td scope="row">{{$plan->name}}</td>
                        <td scope="row">R$ {{ number_format($plan->price, 2, ',', '.') }}</td>
                        <td style="width=10px" class="btn btn-group">
                            <a href="{{ route('plans.show', $plan->url) }}" title="VISUALIZAR" class="btn btn-file"><i class="fas fa-solid fa-eye"></i></a>
                            <a href="{{ route('details.plan.index', $plan->url) }}" title="DETALHES" class="btn btn-file"><i class="fas fa-solid fa-list"></i></a>
                            <a href="{{ route('plans.edit', $plan->url) }}" title="ALTERAR"class="btn btn-file"><i class="fas fa-solid fa-edit"></i></a>
                            <form action="{{ route('plans.destroy', $plan->url) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button title="EXCLUIR" type="submit" class="btn btn-file"><i class="fas fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($pesquisa))
                {!! $plans->appends($pesquisa)->links() !!}
            @else
                {!! $plans->links() !!}    
            @endif
        </div>
    </div>
@stop