<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function oneNews($nameCategory, int $idNews)
    {
        return view('oneNews', [
            'title' => $nameCategory,
            'news' => '',
        ]);
    }
}
