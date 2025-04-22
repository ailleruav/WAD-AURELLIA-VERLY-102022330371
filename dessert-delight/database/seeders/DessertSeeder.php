<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dessert;

class DessertSeeder extends Seeder
{
    public function run(): void
    {
        Dessert::create([
            'name' => 'Chocolate Lava Cake',
            'description' => 'Kue cokelat lembut dengan isi cokelat meleleh.',
            'price' => 25000,
            'image' => 'lava.jpg',
        ]);

        Dessert::create([
            'name' => 'Strawberry Cheesecake',
            'description' => 'Cheesecake lembut dengan topping stroberi segar.',
            'price' => 30000,
            'image' => 'cheesecake.jpg',
        ]);

        Dessert::create([
            'name' => 'Tiramisu',
            'description' => 'Kue kopi khas Italia yang lembut dan creamy.',
            'price' => 28000,
            'image' => 'tiramisu.jpg',
        ]);
    }
}
