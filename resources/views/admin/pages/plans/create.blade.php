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

            <div class="form-group">
              <label>Nome:</label>
              <input type="text" name="name" class="form-control" placeholder="Nome:" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label>Preço:</label>
                <input type="text" name="price" class="form-control" placeholder="Preço:" aria-describedby="helpId">
            </div>  
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição:" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Gravar</button>
            </div>  

        </form>
      </div>
    </div>
@stop
