<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\User;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(20)->create();
        $this->call([
            UserSeeder::class,
            StatutSeeder::class,
            ClientSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
