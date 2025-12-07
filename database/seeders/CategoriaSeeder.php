<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('Categorias')->insert(
            [
            ['nome' => "Galão de água", 'descricao'=> "20L - Retornável", 'imagem'=>"https://http2.mlstatic.com/D_NQ_NP_703054-MLB81028472571_112024-O.webp"],
            ['nome' => "Galão de água", 'descricao'=>"10L - Retornável", 'imagem'=>"https://encurtador.com.br/lCIl"],

            ['nome' => "Galão de Água Ibirá", 'descricao'=>"20L - Retornável", 'imagem'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvtvdF82sZNwzUfV3hLBkngqDzlXFiqOWTvtGjYztf5Q&s"],

            ['nome' => "Galão de água", 'descricao'=> "7L - Descartável", 'imagem'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ51jbsPHuxIto1P7Q5Nn_inpiEENT7n5yt_uROrf3xA&s"],

            ['nome' => "Galão de água", 'descricao'=> "10L - Descartável", 'imagem'=>"https://encurtador.com.br/fGCE"],

            ['nome' => "Galão de água", 'descricao'=> "5L - Descartável", 'imagem'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBL6va12L8Q-2B1OmJwySResZo_fEiLiZo3RpgtZZP2A&s"],

            ['nome' => "Fardo de Garrafinhas de água", 'descricao'=> "500mL - contém 12 garrafinhas o fardo", 'imagem'=>"https://encurtador.com.br/dkNq"],

            ['nome' => "Fardo de Garrafinhas de água", 'descricao'=> "1,5L -contém 12 garrafas o fardo", 'imagem'=>"https://encurtador.com.br/gmoG"],

            ['nome' => "Caixa de copos de água", 'descricao'=> "copos de 200mL", 'imagem'=>"https://encurtador.com.br/ocHk"],

            ['nome' => "Caixa de copo de água", 'descricao'=> "copos de 300mL", 'imagem'=>"https://encurtador.com.br/Nsby"],
            ]
        );
    }
}
