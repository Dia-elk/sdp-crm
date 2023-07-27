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
            'name'=> 'On Progress'
        ]);

        Statut::create([
            'name'=> 'Confirming'
        ]);

        Statut::create([
            'name'=> 'Done'
        ]);
    }
}
