<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembroSorteio;

class MembroSorteioController extends Controller
{
    /**
     * Método para retornar todos os membros do sorteio.
     */
    public function index()
    {
        $membroSorteios = MembroSorteio::all();

        return view('amigo_secreto.listar_membros', ['membros_sorteio' => $membroSorteios]);
    }

    /**
     * Método para retornar o formulário para criar um novo membros do sorteio.
     */
    public function create()
    {
        return view('amigo_secreto.adicionar_membros');
    }

    /**
     *  Método para salvar no banco de dados o novo membro do sorteio.
     */
    public function store(Request $request)
    {
        MembroSorteio::create($request->all());

        return redirect()->route('adicionar.membros')->with('success', 'Membro adicionado com sucesso!');
    }
}
