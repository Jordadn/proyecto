<?php

namespace App\Http\Controllers;
use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    function listar() {
        $oficinas = Oficina::get();
        //return dd($oficinas);
        return view ("oficina", compact("oficinas"));
    }
}
