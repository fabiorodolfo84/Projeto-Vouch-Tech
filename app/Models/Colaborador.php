<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class, 'cargo_colaborador')
                    ->withPivot('nota_desempenho');
    }
}
