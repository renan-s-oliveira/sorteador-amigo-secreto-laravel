<?php

namespace App\Http\Controllers;

use App\Models\MembroSorteio;
use App\Services\SorteioService;

class MembroSorteadoController extends Controller
{
    protected $sorteioService;

    public function __construct(SorteioService $sorteioService)
    {
        $this->sorteioService = $sorteioService;
    }

    public function membroSorteado()
    {
        /* um membro não pode tirar a sí mesmo ou outra pessoa que já foi sorteada */
        $members = MembroSorteio::all();
        $listaSorteado = $this->sorteioService->sortear($members);

        return dd($listaSorteado);
    }
}
