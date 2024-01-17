<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadeSeeder extends Seeder
{
    public function run()
    {
        Unidade::factory(100)->create();
    }
}
