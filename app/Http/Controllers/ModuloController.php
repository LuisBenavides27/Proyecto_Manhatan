<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        return view("modulo");
    }

    public function medicamento()
    {
        return view("mod_medicamento");
    }

}
