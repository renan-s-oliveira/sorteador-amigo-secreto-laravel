
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sorteio Amigo Secreto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Amigo Secreto: {{ $amigo }}</h1>
  <p>Email: {{ $email }}</p> 
  <p>Sugestão de Presente: {{ $sugestao_presente }}</p> 
  <p>Endereço: {{ $endereco }}</p> 
  <p>Bairro: {{ $bairro }}</p> 
  <p>Complemento: {{ $complemento }}</p> 
  <p>Cidade: {{ $cidade }}</p> 
  <p>Cep: {{ $cep }}</p> 
</div>

</body>
</html>
