@extends('adminlte::page')

@section('title', "Detalhaes do Plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}" class="active">Detalhes</a></li>
    </ol>
    <h1>Detalhes do Plano - {{$plan->name}} <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            @include('admin.includes.alerts')
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)   
                    <tr>
                        <td scope="row">{{$detail->name}}</td>
                        <td style="width=10px" class="btn btn-group">
                            <a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" title="VISUALIZAR" class="btn btn-file"><i class="fas fa-solid fa-eye"></i></a>
                            <a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" title="ALTERAR"class="btn btn-file"><i class="fas fa-solid fa-edit"></i></a>
                            <form action="{{ route('details.plan.destroy', [$plan->url, $detail->id]) }}" method="post">
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
                {!! $details->appends($pesquisa)->links() !!}
            @else
                {!! $details->links() !!}    
            @endif
        </div>
    </div>
@stop