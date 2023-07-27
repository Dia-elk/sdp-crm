<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Product;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Client::factory(10)->create();
        Product::factory(20)->create();
        $this->call([
            StatutSeeder::class,
            UserSeeder::class,
            ClientSeeder::class,
            OrderSeeder::class
        ]);
    }
}
