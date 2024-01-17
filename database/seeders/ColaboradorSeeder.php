<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaborador;

class ColaboradorSeeder extends Seeder
{
    public function run()
    {
        Colaborador::factory(100)->create();
    }
}
