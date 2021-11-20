<?php

namespace App\Services;

use App\Models\MembroSorteio;
use App\Mail\SendMailAmigoSecreto;
use Illuminate\Support\Facades\Mail;

class SorteioService
{
    public function sortear($membroSorteio)
    {
        $listaSorteado = [];
        foreach ($membroSorteio as $membro) {
            while ($membro == $membroSorteioRandom = MembroSorteio::inRandomOrder()->first() or in_array($membroSorteioRandom->email, $listaSorteado)) {
                $membroSorteioRandom = MembroSorteio::inRandomOrder()->first();
            }
            $listaSorteado[] = $membroSorteioRandom->email;
            Mail::to($membro->email)->send(new SendMailAmigoSecreto(['amigo' => $membroSorteioRandom->nome, 'sugestao_presente' => $membroSorteioRandom->sugestao_presente]));
        }

        return $listaSorteado;
    }
}
