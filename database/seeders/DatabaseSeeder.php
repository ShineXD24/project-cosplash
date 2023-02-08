<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Arrival;
use App\Models\Favorit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Arrival::create([
            'favorit_id' => 1,
            'pict' => 'makima.png',
            'name' => 'Makima',
            'price' => 100000,
            'rating' => 4,
            'category' => 'Anime',
        ]);

        Arrival::create([
            'favorit_id' => 2,
            'pict' => 'eula.png',
            'name' => 'Eula',
            'price' => 100000,
            'rating' => 5,
            'category' => 'Game',
        ]);

        Arrival::create([
            'favorit_id' => 2,
            'pict' => 'superhero.png',
            'name' => 'super',
            'price' => 100000,
            'rating' => 5,
            'category' => 'Super Hero',
        ]);

        Favorit::create([
            'pict' => 'trending.png',
            'title' => 'Trending on instagram',
        ]);

        Favorit::create([
            'pict' => 'all-under.png',
            'title' => 'All Under $40',
        ]);
    }
}
