<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailAmigoSecreto extends Mailable
{
    use Queueable;
    use SerializesModels;

    protected $sorteio;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sorteio = [])
    {
        $this->sorteio = $sorteio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Sorteio Amigo Secreto')->view('emails.sorteio_amigo_secreto')
        ->with([
            'amigo' => $this->sorteio['amigo']->nome,
            'sugestao_presente' => $this->sorteio['amigo']->sugestao_presente,
            'email' => $this->sorteio['amigo']->email,
            'endereco' => $this->sorteio['amigo']->endereco,
            'complemento' => $this->sorteio['amigo']->complemento,
            'bairro' => $this->sorteio['amigo']->bairro,
            'cidade' => $this->sorteio['amigo']->cidade,
            'cep' => $this->sorteio['amigo']->cep,
        ]);
    }
}
