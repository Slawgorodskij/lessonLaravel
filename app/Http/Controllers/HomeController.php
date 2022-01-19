<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    private string $title = 'Главная страница';


    public function index()
    {
        $categories = Category::all();
        return view('index', [
            'title' => $this->title,
            'categories' => $categories,
        ]);
    }
}
