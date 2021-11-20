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

        return view('membro_sorteio.index', ['membros_sorteio' => $membroSorteios]);
    }

    /**
     * Método para retornar o formulário para criar um novo membros do sorteio.
     */
    public function create()
    {
        return view('membro_sorteio.create');
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
