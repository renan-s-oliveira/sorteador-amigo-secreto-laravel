@if(Session::has('success'))
       <h1>{{ Session::get('success') }}</h1> 
@endif

<form action="{{ route('armazenar.membros') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <br>
    <input type="email" name="email" placeholder="Email">
    <br>
    <textarea name="sugestao_presente" id="" cols="30" rows="10"  placeholder="Sugestão de presente"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>

