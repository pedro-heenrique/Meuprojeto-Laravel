<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('home-page');
    }

    public function create() {
        return view('events.create');

    }

    public function news(){
        return view('events.news');
    }

    public function called(){
        return view('events.called');
    }

    public function myprofile() {
        return view('events.myprofile');
    }

    public function myocurrences() {
        return view('events.myocurrences');
    }


    public function newocurrence(){
        return view('events.newocurrence');
    }



}

