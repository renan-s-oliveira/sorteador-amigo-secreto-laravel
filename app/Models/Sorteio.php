<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
    ];

    public function usuario()
    {
        return $this->belongsToMany(User::class, 'sorteio_users', 'sorteio_id', 'user_id');
    }
}
