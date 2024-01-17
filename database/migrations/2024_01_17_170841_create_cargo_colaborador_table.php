<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoColaboradorTable extends Migration
{
    public function up()
    {
        Schema::create('cargo_colaborador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_id')->constrained('cargos');
            $table->foreignId('colaborador_id')->constrained('colaboradores');
            $table->decimal('nota_desempenho', 5, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargo_colaborador');
    }
}
