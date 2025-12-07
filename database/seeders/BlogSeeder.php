<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('Blogs')->insert(
            [
            ['titulo' => "O segredo da Fonte da Juventude", 'descricao'=> "Você já parou para pensar na diferença que a qualidade da água faz no seu dia a dia? A Água Mineral Ibirá, destaque na imagem da nossa capa, não é apenas uma água para matar a sede, mas sim uma fonte com características únicas e terapêuticas. Oriunda de uma região de solo rico, essa água se diferencia pelo seu pH alcalino natural (geralmente acima de 10) e alta concentração de minerais importantes, como o Vanádio, um antioxidante que auxilia no combate aos radicais livres e traz benefícios para a digestão e o bem-estar geral. Beber Ibirá é fazer uma escolha pela hidratação que nutre e equilibra o corpo, tornando-se uma aliada valiosa para quem busca um estilo de vida mais saudável, aproveitando os presentes que a natureza oferece em cada gole.", 'imagem'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE64n3fQkynZ6aV0ew5WAuMf5kB_PagIik18_ButkBZQ&s"],

            ['titulo' => "O descarte Correto de garrafas PET", 'descricao'=>"O consumo de água mineral engarrafada é um hábito saudável e necessário, mas o plástico PET dessa embalagem tem um impacto ambiental enorme se não for descartado da maneira correta, conforme sugere a imagem que representa a importância do descarte consciente. Não basta beber a água; é preciso fechar o ciclo de forma responsável! O passo a passo é simples: primeiramente, esvazie completamente o recipiente, seguido de uma lavagem rápida para remover resíduos, o que evita a contaminação nos centros de reciclagem. Se possível, amasse a garrafa para reduzir o volume no transporte e, por fim, descarte-a no lixo seco ou reciclável (lixeira azul), pois ela é 100% reciclável. Adotar essa rotina simples garante que sua garrafa não acabe em rios ou aterros sanitários, transformando um resíduo em matéria-prima e contribuindo para a sustentabilidade.", 'imagem'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1jrEuRM74kgQuhAdOE8fsbEHFk6z6ZJWFDQ&s"],

            ]
        );
    }
}
