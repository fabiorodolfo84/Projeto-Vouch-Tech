<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaborador;
use App\Models\Cargo;

class CargoColaboradorSeeder extends Seeder
{
    public function run()
    {
        $colaboradores = Colaborador::all();
        $cargos = Cargo::all();

        foreach ($colaboradores as $colaborador) {
            $colaborador->cargos()->attach(
                $cargos->random(),
                ['nota_desempenho' => rand(0, 10)]
            );
        }
    }
}
