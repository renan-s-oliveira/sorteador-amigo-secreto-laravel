@extends('layouts.sorteio_layout')

@section('content')
<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-8">
<form action="{{ route('armazenar.membros') }}" method="post">
    @csrf
    @if(Session::has('success'))
       <h1>{{ Session::get('success') }}</h1> 
    @endif
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input name="nome" type="nome" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Email</label>
        <input type="email" name="email" class="form-control"  placeholder="Email">
        </div>
    </div>
    <div class="form-group col-md-6" >
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" name="endereco" placeholder="Endereço">
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress2">Complemento</label>
        <input type="text" class="form-control" name="complemento" placeholder="Complemento">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Cidade</label>
        <input type="text" class="form-control" name="cidade" placeholder="Cidade">
        </div>
        <div class="form-group col-md-6">
        <label for="inputState">Bairro</label>
        <input type="text" class="form-control" name="bairro" placeholder="Bairro">
        </div>
        <div class="form-group col-md-6">
        <label for="inputZip">CEP</label>
        <input type="text" class="form-control" name="cep" placeholder="CEP">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">Sugestão de presente</label>
        <textarea class="form-control" name="sugestao_presente" id="" rows="3" placeholder="Sugestão de presente" ></textarea>
    </div>
    <br>
    <div class="form-group col-md-6">
    <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
    </form>
    </div>
    <div class="col-md-2">

    </div>
</div>
@stop