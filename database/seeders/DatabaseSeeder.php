<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
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
        Item::create([
            'pict' => 'eula.jpg',
            'name' => 'Eula',
            'price' => 100000,
            'rating' => 5,
        ]);

        Item::create([
            'pict' => 'eula.png',
            'name' => 'Eula',
            'price' => 100000,
            'rating' => 5,
        ]);

        Item::create([
            'pict' => 'makima.png',
            'name' => 'Makima',
            'price' => 100000,
            'rating' => 4,
        ]);
    }
}
