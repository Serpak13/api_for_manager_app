<?php

namespace Database\Seeders;

use App\Models\TechnicModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TechnicModel::factory()->count(10)->create();
    }
}
