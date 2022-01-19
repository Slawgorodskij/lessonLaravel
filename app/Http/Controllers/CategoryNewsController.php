<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    private string $title = 'Категории новостей';

    public function category()
    {
        return view('category', [
            'title' => $this->title,
            'listCategory' => '',
        ]);
    }
}
