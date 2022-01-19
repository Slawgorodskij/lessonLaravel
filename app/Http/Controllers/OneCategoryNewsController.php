<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OneCategoryNewsController extends Controller
{

    public function oneCategory($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();

        return view('oneCategory', [
            'title' => $category->title,
            'list_news' => $category->news,
        ]);
    }
}
