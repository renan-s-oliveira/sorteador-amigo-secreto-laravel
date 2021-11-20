<table>
    <tr>
        <td>Nome</td>
        <td> </td>
        <td>E-mail</td>
    </tr>
    @foreach ($membros_sorteio as $membro_sorteio)
        <tr>
            <td>{{ $membro_sorteio->nome }}</td>
            <td> </td>
            <td>{{ $membro_sorteio->email }}</td>
        </tr>    
    @endforeach
</table>