<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class OneNewsController extends Controller
{
    public function oneNews($idNews)
    {
        $news = News::where('id', $idNews)->first();

        return view('oneNews', [
            'title' => $news->title,
            'category_id' => $news->category->id,
            'news' => $news,
        ]);
    }
}
