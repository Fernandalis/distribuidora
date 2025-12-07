<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Marcas')->insert(
            [
            ['nome' => "Himalaia", 'descricao'=> "A água mineral natural Himalaia, frequentemente associada à pureza e ao equilíbrio, é captada em fontes cristalinas, como as da Estância de São Pedro. Ela é reconhecida por sua composição mineral estável e balanceada, sendo uma opção popular para a hidratação diária. Embora o nome possa evocar a pureza e os minerais da região do Himalaia, trata-se de uma água brasileira de qualidade, focada em fornecer uma hidratação agradável e com um perfil mineral consistente.", 'logo'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScDlqJVymcUHS4vTbDa7xgQPRfGuryUh-W7WBoFs2qEQ&s"],

            ['nome' => "Puritá", 'descricao'=>"Conhecida como Água Mineral Serra Negra Puríssima, a Puritá é extraída da Serra da Mantiqueira, uma região montanhosa famosa por suas fontes de águas minerais. Seu principal diferencial é ser uma água ligeramente alcalina e litinada, o que significa que contém o mineral lítio em sua composição. O lítio é frequentemente associado a propriedades que ajudam a reduzir o estresse e a promover o bem-estar, tornando a Puritá uma escolha valorizada não apenas pela hidratação, mas também por seus potenciais benefícios minerais adicionais.", 'logo'=>"https://minaguaserra.com.br/wp-content/uploads/2024/07/purita.png"],

            ['nome' => "Ibirá", 'descricao'=>"A Ibirá é uma água mineral natural altamente distinta, captada no subsolo das Termas de Ibirá, no estado de São Paulo, em uma área rica em rochas basálticas. Sua característica mais notável é o pH marcadamente alcalino, geralmente superior a 10, e a presença significativa de Vanádio, um mineral com propriedades antioxidantes. Devido ao seu alto pH e à composição única, a Ibirá é frequentemente recomendada por auxiliar na neutralização da acidez estomacal e no combate a problemas digestivos, sendo reconhecida como uma água com potenciais benefícios terapêuticos.", 'logo'=>"https://www.aguaibira.com.br/assets/img/logo.png"],
            ]
        );
    }
}
