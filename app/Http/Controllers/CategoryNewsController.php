<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    private string $title = 'Категории новостей';

    public function category()
    {
        $listCategories = Category::orderBy('title')->get();

        return view('category', [
            'title' => $this->title,
            'list_categories' => $listCategories,
        ]);
    }
}
