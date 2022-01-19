<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    private string $title = 'Главная страница';


    public function index()
    {
        return view('index', [
            'title' => $this->title,
        ]);
    }
}
