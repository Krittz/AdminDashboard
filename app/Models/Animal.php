<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'especie',
        'raca',
        'sexo',
        'data_nascimento',
        'data_aquisicao',
        'data_venda',
        'custo_aquisicao',
        'preco_venda',
        'status',
        'mae_nome',
        'pai_nome',
        'observacoes',
        'prenhez',
        'photo',
        'user_id', // Adicionando user_id aos campos preenchíveis
    ];

    protected $dates = ['data_nascimento', 'data_aquisicao', 'data_venda'];

    public static function getStatusOptions()
    {
        return [
            'solteiro' => 'Solteiro',
            'em_producao' => 'Em Produção',
            'vendido' => 'Vendido'
        ];
    }

    public static function getPrenhezOptions()
    {
        return [
            'sim' => 'Sim',
            'nao' => 'Não'
        ];
    }

    protected function casts(): array
    {
        return [
            'data_nascimento' => 'datetime',
            'data_aquisicao' => 'datetime',
            'data_venda' => 'datetime',
            'photo' => 'binary',
        ];
    }

    // Método para definir o ID do usuário automaticamente
    public static function boot()
    {
        parent::boot();

        static::creating(function ($animal) {
            $animal->user_id = Auth::id();
        });
    }
}
