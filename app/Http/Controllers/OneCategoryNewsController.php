<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneCategoryNewsController extends Controller
{

    public function oneCategory($nameCategory)
    {

        return view('oneCategory', [
            'title' => $nameCategory,
            'list_news' => '',
        ]);
    }
}
