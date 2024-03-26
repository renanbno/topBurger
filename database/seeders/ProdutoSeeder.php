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
        {
            $lanches = [

                [
                    'nome' => 'Burger 1',
                    'preco' => 17,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 2',
                    'preco' => 20,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 3',
                    'preco' => 15,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 4',
                    'preco' => 12,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 5',
                    'preco' => 16,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 6',
                    'preco' => 11,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 7',
                    'preco' => 19,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 8',
                    'preco' => 28,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 9',
                    'preco' => 23,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 10',
                    'preco' => 25,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 11',
                    'preco' => 32,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 12',
                    'preco' => 24,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 13',
                    'preco' => 38,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 14',
                    'preco' => 20,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],

                [
                    'nome' => 'Burger 15',
                    'preco' => 10,99,
                    'ingredientes' => 'Hambúrger de Rafal, bacon, Galinha de sara',
                    'imagem' => 'images/hamburgao.jpeg'
                ],
            ];

            foreach($lanches as $lanche) {
                DB::table('produtos')-> insert([
                    'nome' => $lanche [ 'nome'],
                    'preco' => $lanche [ 'preco'],
                    'ingredientes' => $lanche [ 'ingredientes'],
                    'imagem' => $lanche [ 'imagem'],
                    'created_at' => now (),
                    'updated_at' => now ()
                ]);
            }
            
        }
    
    
    }
}
