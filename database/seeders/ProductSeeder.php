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
                'name'       => 'Camiseta Stussy SS Link Black',
                'brand'      => 'STUSSY',
                'description'=> 'Camiseta premium da Stussy com estampa SS Link em preto. Confeccionada em algodão 100% com caimento relaxado característico da marca.',
                'price'      => 649.99,
                'image'      => 'assets/camiseta-stussy.png',
                'category'   => 'Camisetas',
                'stock'      => 10,
                'active'     => true,
                'collection' => 'summer',
            ],
            [
                'name'       => 'Virgil Abloh x MCA x Champion Camiseta Figures of Speech White',
                'brand'      => 'CHAMPION',
                'description'=> 'A Virgil Abloh x MCA x Champion Camiseta Figures of Speech White celebra a icônica exposição Figures of Speech, realizada no Museum of Contemporary Art Chicago.',
                'price'      => 1290.00,
                'image'      => 'assets/camiseta-figures.png',
                'category'   => 'Camisetas',
                'stock'      => 5,
                'active'     => true,
                'collection' => null,
            ],
            [
                'name'       => 'Umbro x Supreme Jaqueta Cotton Ripstop Track Black SS26-W1',
                'brand'      => 'SUPREME',
                'description'=> 'Jaqueta em ripstop 100% algodão com forro em tela e forro de tafetá nas mangas.',
                'price'      => 2499.00,
                'image'      => 'assets/jaqueta-sup.png',
                'category'   => 'Jaquetas',
                'stock'      => 3,
                'active'     => true,
                'collection' => 'winter',
            ],
            [
                'name'       => 'Camiseta Stussy Rollers Blue',
                'brand'      => 'STUSSY',
                'description'=> 'A Stüssy Camiseta Rollers Blue traz o visual clássico da marca com pegada street autêntica.',
                'price'      => 799.99,
                'image'      => 'assets/camiseta-stussy2.png',
                'category'   => 'Camisetas',
                'stock'      => 8,
                'active'     => true,
                'collection' => 'summer',
            ],
            [
                'name'       => 'Camiseta Hellstar Globe Smile Face White',
                'brand'      => 'HELLSTAR',
                'description'=> 'Camiseta Hellstar com estampa Globe Smile Face em branco.',
                'price'      => 2500.00,
                'image'      => 'assets/camiseta hellstar.webp',
                'category'   => 'Camisetas',
                'stock'      => 5,
                'active'     => true,
                'collection' => 'summer',
            ],
            [
                'name'       => 'Calça Exclusiviist New Vintage Sacred Sweat Grey',
                'brand'      => '1OF1',
                'description'=> 'Calça streetwear com lavagem vintage e detalhes exclusivos.',
                'price'      => 399.90,
                'image'      => 'assets/CALCA 1of1.jpg',
                'category'   => 'Calças',
                'stock'      => 8,
                'active'     => true,
                'collection' => 'winter',
            ],
            [
                'name'       => 'KAWS Holiday Thailand Vinyl Brown',
                'brand'      => 'KAWS',
                'description'=> 'Figura de vinil KAWS Holiday edição Thailand em marrom.',
                'price'      => 10500.00,
                'image'      => 'assets/boneco kaws.webp',
                'category'   => 'Acessórios',
                'stock'      => 2,
                'active'     => true,
                'collection' => null,
            ],
            [
                'name'       => 'Boné Stussy Parts & Service Mesh Blue',
                'brand'      => 'STUSSY',
                'description'=> 'Boné mesh Stussy Parts & Service em azul.',
                'price'      => 650.00,
                'image'      => 'assets/bone stussy.webp',
                'category'   => 'Acessórios',
                'stock'      => 7,
                'active'     => true,
                'collection' => 'summer',
            ],
            [
                'name'       => 'Hanes x Supreme Cueca Spider Web Boxer Briefs 2 Pack Black SS26-W9',
                'brand'      => 'SUPREME',
                'description'=> 'Pack com 2 cuecas boxer da colaboração Hanes x Supreme com estampa Spider Web.',
                'price'      => 800.00,
                'image'      => 'assets/cueca sup.webp',
                'category'   => 'Acessórios',
                'stock'      => 10,
                'active'     => true,
                'collection' => null,
            ],
        ];

        Product::insert($products);
    }
}