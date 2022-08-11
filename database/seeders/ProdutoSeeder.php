<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtos::create([
            'nome'         =>   'Teclado',
            'quantidade'   =>    10,
            'valor'        =>    260
        ]);
        
        Produtos::create([
            'nome'         =>   'Mouse',
            'quantidade'   =>    5,
            'valor'        =>    150
        ]);

        Produtos::create([
            'nome'         =>   'Monitor 29',
            'quantidade'   =>    20,
            'valor'        =>    2200
        ]);


    }
}
