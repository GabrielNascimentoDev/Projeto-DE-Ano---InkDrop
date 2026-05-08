<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name'        => 'Camiseta Stussy SS Link Black',
                'brand'       => 'STUSSY',
                'description' => 'Camiseta premium da Stussy com estampa SS Link em preto. Confeccionada em algodão 100% com caimento relaxado característico da marca.',
                'price'       => 649.99,
                'image'       => 'assets/camiseta-stussy.png',
                'category'    => 'Camisetas',
                'stock'       => 10,
                'active'      => true,
            ],
            [
                'name'        => 'Virgil Abloh x MCA x Champion Camiseta Figures of Speech White',
                'brand'       => 'CHAMPION',
                'description' => 'A Virgil Abloh x MCA x Champion Camiseta Figures of Speech White celebra a icônica exposição Figures of Speech, realizada no Museum of Contemporary Art Chicago. Em base branca, a peça traz gráficos e tipografias que refletem o universo conceitual de Virgil Abloh, conectando moda, arte e cultura contemporânea.',
                'price'       => 1290.00,
                'image'       => 'assets/camiseta-figures.png',
                'category'    => 'Camisetas',
                'stock'       => 5,
                'active'      => true,
            ],
            [
                'name'        => 'Umbro x Supreme Jaqueta Cotton Ripstop Track Black SS26-W1',
                'brand'       => 'SUPREME',
                'description' => 'Jaqueta em ripstop 100% algodão com forro em tela e forro de tafetá nas mangas. Fecho de zíper completo com bolsos laterais com zíper na parte inferior frontal. Cordão elástico interno na barra com punhos elásticos e gola canelada interna. Logotipos bordados no peito e nas costas. Etiqueta com logotipo em tecido no peito.',
                'price'       => 2499.00,
                'image'       => 'assets/jaqueta-sup.png',
                'category'    => 'Jaquetas',
                'stock'       => 3,
                'active'      => true,
            ],
            [
                'name'        => 'Camiseta Stussy Rollers Blue',
                'brand'       => 'STUSSY',
                'description' => 'A Stüssy Camiseta Rollers Blue traz o visual clássico da marca com pegada street autêntica. Confeccionada em algodão confortável, apresenta estampa gráfica “Rollers” que adiciona identidade ao tom azul, resultando em uma peça versátil, casual e atemporal para o dia a dia.',
                'price'       => 799.99,
                'image'       => 'assets/camiseta-stussy2.png',
                'category'    => 'Camisetas',
                'stock'       => 8,
                'active'      => true,
            ],
        ];
        Product::insert($products);
    }
}