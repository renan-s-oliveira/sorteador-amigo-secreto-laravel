<?php

namespace App\Http\Controllers;

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

        $listaSorteado = $this->sorteioService->sortear();

        dd($listaSorteado);
    }
}
