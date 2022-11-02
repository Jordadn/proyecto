<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jadde extends Controller
{
    function listar() {
        return view ("jadde");
    }
}
