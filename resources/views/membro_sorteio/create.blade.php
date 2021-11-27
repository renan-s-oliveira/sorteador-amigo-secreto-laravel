<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@if(Session::has('success'))
       <h1>{{ Session::get('success') }}</h1> 
@endif

<br>
<div class="row-md-12">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <form action="{{ route('armazenar.membros') }}" method="post">
    @csrf
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
        <div class="form-group col-md-4">
        <label for="inputState">Bairro</label>
        <input type="text" class="form-control" name="bairro" placeholder="Bairro">
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">CEP</label>
        <input type="text" class="form-control" id="inputZip" placeholder="CEP">
        </div>
    </div>
    <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Sugestão de presente</label>
        <textarea class="form-control" name="sugestao_presente" id="" rows="3" placeholder="Sugestão de presente" ></textarea>
    </div>
    <div class="form-group col-md-6">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>
    </div>
    <div class="col-md-2">
    </div>
</div>
