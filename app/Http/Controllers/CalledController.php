<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalledController extends Controller
{
    public function index() {
        // Adicione qualquer lógica necessária para o método index aqui
        return view('home-page');
    }

    public function called() {
        return view('Calleds.called');

    }

}
    