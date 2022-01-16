<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    private string $title = 'Главная страница';
    private array $listCategory = [
        [
            'nameCategory' => 'мода',
            'partition' => 'для женщин',
        ],
        [
            'nameCategory' => 'авто',
            'partition' => 'для мужчин',
        ],
        [
            'nameCategory' => 'свежие новости',
            'partition' => 'для всех',
        ]
    ];
    private array $oneCategory = [
        'nameCategory' => 'Красота и здоровье',
        'partition' => 'для женщин',
    ];

    public function index()
    {
        return view('index', [
            'title' => $this->title,
            'listCategory' => $this->listCategory,
            'oneCategory' => $this->oneCategory,
        ]);
    }
}
