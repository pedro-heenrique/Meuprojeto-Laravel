<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 

class EventController extends Controller
{
    public function index()
    {
        return view('home-page');
    }

    public function create()
    {
        return view('events.create');
    }

    public function news()
    {
        return view('events.news');
    }

    public function called()
    {
        return view('events.called');
    }

    public function myprofile()
    {
        return view('events.myprofile');
    }

    public function myocurrences()
    {
        return view('events.myocurrences');
    }

    public function newocurrence()
    {
        return view('events.newocurrence');
    }

    public function store(Request $request)
    {
        // Validar e salvar outros dados do evento, se necessário
        $event = new Event;

        // image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->file('image');

            $extension = $requestImage->getClientOriginalExtension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/ocorrencias'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/home')->with('msg', 'Ocorrência criada com sucesso');
    }

    
    public function voltarPaginaAnterior()
    {
    return redirect()->back();
    }

}

