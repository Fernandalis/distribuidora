<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcessorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Acessorios')->insert(
            [
            ['nome' => "Bomba Elétrica", 'descricao'=> "Simples", 'precoun'=> "R$ 20,00", 'imagem'=> "https://encurtador.com.br/nCUl" ],

            ['nome' => "Suporte para galão de água", 'descricao'=>"Plástico", 'precoun'=> "R$ 35,00", 'imagem'=> "https://encurtador.com.br/pgfP" ],

            ['nome' => "Suporte para galão de água", 'descricao'=>"Barro", 'precoun'=> "R$ 40,00", 'imagem'=> "https://encurtador.com.br/VLUr" ],

            ['nome' => "Torneirinha", 'descricao'=>"para suporte de galão de água", 'precoun'=> "R$ 8,00", 'imagem'=> "https://encurtador.com.br/vldE" ],

            ['nome' => "Deluti", 'descricao'=>"O Xarope Deluti é um medicamento fitoterápico utilizado como expectorante e broncodilatador para tratar a tosse e auxiliar na eliminação do catarro em casos de resfriados e bronquites. Sua eficácia é atribuída a extratos vegetais como o guaco.", 'precoun'=> "R$ 15,00", 'imagem'=> "https://encurtador.com.br/SqHc" ],

            ['nome' => "Copos de plático", 'descricao'=>"copos descartáveis", 'precoun'=> "R$ 11,00", 'imagem'=> "https://encurtador.com.br/DWBT" ],
            ]
        );
    }
}
