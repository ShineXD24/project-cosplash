<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'pict' => 'spiderman1.png',
            'name_char' => 'Spiderman',
            'title' => 'Marvel',
            'category' => 'Film',
            'gender' => 'Women',
            'size' => 'M',
            'price' => 150000,
            'rating' => 5,
        ]);

        DB::table('shops')->insert([
            'pict' => 'kitagawa.png',
            'name_char' => 'Marin Kitagawa',
            'title' => 'My Dress-Up Darling',
            'category' => 'Anime',
            'gender' => 'Women',
            'size' => 'M',
            'price' => 120000,
            'rating' => 5,
        ]);
        
        DB::table('shops')->insert([
            'pict' => 'valorant1.png',
            'name_char' => 'Viper',
            'title' => 'Valorant',
            'category' => 'Film',
            'gender' => 'Women',
            'size' => 'M',
            'price' => 122000,
            'rating' => 5,
        ]);

        DB::table('shops')->insert([
            'pict' => 'kaguya.png',
            'name_char' => 'Kaguya Shinomiya',
            'title' => 'Love Is War',
            'category' => 'Anime',
            'gender' => 'Women',
            'size' => 'M',
            'price' => 200000,
            'rating' => 5,
        ]);

        DB::table('shops')->insert([
            'pict' => 'luffy.jpg',
            'name_char' => 'MD Luffy',
            'title' => 'One Piece',
            'category' => 'Anime',
            'gender' => 'Men',
            'size' => 'M',
            'price' => 114000,
            'rating' => 5,
        ]);
    }
}
