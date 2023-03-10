@extends('adminlte::page')

@section('title', 'Cadastro de Planos')

@section('content_header')
    <h1>Novo Plano</h1>
@stop

@section('content')
    <div class="card text-left">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <form action="{{ route('plans.store') }}" class="form" method="POST">
            @csrf

            @include('admin.pages.plans._partials.form')
            
      </div>
    </div>
@stop
