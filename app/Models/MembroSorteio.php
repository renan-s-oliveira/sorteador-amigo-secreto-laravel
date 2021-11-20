<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroSorteio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'sugestao_presente',
    ];
}
