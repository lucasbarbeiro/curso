@extends('adminlte::page')

@section('title', "Alteração do Plano {$plan->name}")

@section('content_header')
    <h1>Alteração</h1>
@stop

@section('content')
    <div class="card text-left">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <form action="{{ route('plans.update', $plan->url) }}" class="form" method="POST">
            @csrf
            @method('PUT')

            @include('admin.pages.plans._partials.form')

        </div>
    </div>
@stop
