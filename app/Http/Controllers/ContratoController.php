<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index()
    {
        $contratos = Contrato::all();
        return view('dashboard', compact('contratos'));
    }

    /**
     * Mostrar los detalles de un contrato específico.
     */
    public function show($id)
    {
        $contrato = Contrato::with('negociaciones.usuario')->findOrFail($id);
        return view('contratos.show', compact('contrato'));
    }
}
