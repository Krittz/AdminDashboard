<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        $tableTitle = "Lista de Animais";
        $tableHeaders = ['Nome', 'Espécie', 'Raça', 'Sexo', 'Data de Nascimento', 'Data de Aquisição', 'Data de venda', 'Custo Aquisição', 'Preço Venda'];
        $tableData = $animals->map(function ($animal) {
            return [
                $animal->nome,
                $animal->especie,
                $animal->raca,
                $animal->sexo,
                $animal->data_nascimento ? $animal->data_nascimento->format('d/m/Y') : '-',
                $animal->data_aquisicao ? $animal->data_aquisicao->format('d/m/Y') : '-',
                $animal->data_venda ? $animal->data_venda->format('d/m/Y') : '-',
                $animal->custo_aquisicao ? $animal->custo_aquisicao : '-',
                $animal->preco_venda ? $animal->preco_venda : '-',

            ];
        });

        return view('pages.animais', compact('tableTitle', 'tableHeaders', 'tableData'));
    }
}
