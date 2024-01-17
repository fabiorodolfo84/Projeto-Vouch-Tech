<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;

class UnidadeController extends Controller
{
    public function index()
    {
        $unidades = Unidade::all();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        return view('unidades.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados e armazenamento no banco de dados
        Unidade::create($request->all());

        return redirect()->route('unidades.index')->with('success', 'Unidade cadastrada com sucesso.');
    }

    // Implemente os métodos show, edit e update conforme necessário

    public function destroy(Unidade $unidade)
    {
        $unidade->delete();
        return redirect()->route('unidades.index')->with('success', 'Unidade excluída com sucesso.');
    }
}
