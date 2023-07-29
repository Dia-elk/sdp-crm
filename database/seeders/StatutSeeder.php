<?php

namespace Database\Seeders;

use App\Models\Statut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statut::create([
            'name'=> 'In Progress',
            'color' => 'orange-400',
        ]);

        Statut::create([
            'name'=> 'Done',
             'color' => 'green-400',
        ]);

        Statut::create([
            'name'=> 'Cancelled',
            'color' => 'red-400',
        ]);
    }
}
