<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Producao extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'litros_manha',
        'litros_tarde',
        'observacao', // Corrigi a grafia de 'observação' para 'observacao'
    ];

    protected $casts = [
        'data' => 'datetime',
    ];

    // Método para definir o ID do usuário automaticamente
    public static function boot()
    {
        parent::boot();

        static::creating(function ($producao) {
            $producao->user_id = Auth::id();
        });
    }
}
