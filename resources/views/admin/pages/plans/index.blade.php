@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card text-left">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)   
                <tr>
                    <td scope="row">{{$plan->name}}</td>
                    <td scope="row">{{$plan->price}}</td>
                    <td style="width=10px">
                        <a href="" class="btn btn-warning">VER</a>
                    </td>
                </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer">
            {!! $plans->links() !!}
        </div>
      </div>
    </div>
@stop