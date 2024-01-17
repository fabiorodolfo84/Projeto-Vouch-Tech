<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('cnpj');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unidades');
    }
}
