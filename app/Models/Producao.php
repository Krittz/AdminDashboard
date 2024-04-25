<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
        'litros_manha',
        'litros_tarde',
        'observação',
    ];
    protected function casts(): array
    {
        return [
            'data' => 'datetime',
        ];
    }
}
