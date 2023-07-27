<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\File;
use App\Models\Statut;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => rand(1,20),
            'file_id' => File::factory(),
            'user_id' => rand(1,User::count()),
            'client_id' => rand(1,Client::count()),
            'statut_id'=> rand(1,Statut::count()),
            'quantity' => rand(1,5000),
            'price' => rand(1,20000),
        ];
    }
}
