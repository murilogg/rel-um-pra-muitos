<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
        	'nome' => 'Camiseta Polo','preco' => 100,
        	'estoque' => 50,'categoria_id' => 1
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'Calça Jeans', 'preco' => 120,
        	'estoque' => 10, 'categoria_id' => 1
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'PC GAMER', 'preco' => 4500,
        	'estoque' => 5, 'categoria_id' => 2
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'Boticario', 'preco' => 200,
        	'estoque' => 30, 'categoria_id' => 3
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'Mesa Quadrada', 'preco' => 1500,
        	'estoque' => 3, 'categoria_id' => 4
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'Cereal Rádical', 'preco' => 30,
        	'estoque' => 500, 'categoria_id' => 5
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'Impressora', 'preco' => 700,
        	'estoque' => 20, 'categoria_id' => 6
        ]);
        DB::table('produtos')->insert([
        	'nome' => 'Mouse', 'preco' => 40,
        	'estoque' => 70, 'categoria_id' => 6
        ]);
    }
}







