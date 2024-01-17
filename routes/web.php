<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;


    Route::resource('unidades', UnidadeController::class);
    Route::resource('colaboradores', ColaboradorController::class);
    Route::resource('unidades', UnidadeController::class);


Route::resource('unidades', UnidadeController::class);



    Route::get('/', function () {
        try {
            DB::connection()->getPdo();
            echo "Conexão efetuada com sucesso. " . DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
            die('Não foi possivel conectar a base de dados. Erro: '. $e->getMessage());
        }
});
