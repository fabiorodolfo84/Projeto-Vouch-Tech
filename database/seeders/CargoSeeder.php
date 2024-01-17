<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargoSeeder extends Seeder
{
    public function run()
    {
        Cargo::factory(10)->create();
    }
}
