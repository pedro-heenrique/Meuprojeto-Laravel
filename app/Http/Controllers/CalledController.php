<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalledController extends Controller
{
    public function index() {
        return view('home-page');
    }

    public function called() {
        return view('Calleds.called');

    }

}
    