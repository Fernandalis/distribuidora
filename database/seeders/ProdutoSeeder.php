<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Produtos')->insert(
            [
            ['valorun' => "R$ 16,00", 'marcas'=> "Himalaia, Puritá", 'categoria_id'=> 1 ],

            ['valorun' => "R$ 10,00", 'marcas'=>"Himalaia, Ibirá", 'categoria_id'=> 2 ],

            ['valorun' => "R$ 25,00", 'marcas'=>"Ibirá", 'categoria_id'=> 3 ],

            ['valorun' => "R$ 8,00", 'marcas'=>"Ibirá", 'categoria_id'=> 4 ],

            ['valorun' => "R$ 12,00", 'marcas'=>"Himalaia,Ibirá", 'categoria_id'=> 5 ],

            ['valorun' => "R$ 6,00", 'marcas'=>"Himalaia, Ibirá", 'categoria_id'=> 6 ],

            ['valorun' => "R$ 17,00", 'marcas'=>"Himalaia, Ibirá", 'categoria_id'=> 7 ],

            ['valorun' => "R$ 20,00", 'marcas'=>"Himalaia, Ibirá", 'categoria_id'=> 8 ],

            ['valorun' => "R$ 30,00", 'marcas'=>"Himalaia, São Pedro", 'categoria_id'=> 9 ],

            ['valorun' => "R$ 60,00", 'marcas'=>"Himalaia, São Pedro", 'categoria_id'=> 10 ],
            ]
        );
    }
}
