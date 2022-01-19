<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    private string $title = 'Категории новостей';
    private array $listCategory = [
        [
            'nameCategory' => 'авто',
            'news' => [
                '1' => 'Когда появится Tesla Cybertruck? Сроки опять сдвигаются',
                '2' => 'Hyundai везет в Россию сразу 5 новинок в 2022 году',
                '3' => 'Toyota показала бешеную малолитражку GRMN Yaris.',
                '4' => 'Эка логика',
            ],
        ],
        [
            'nameCategory' => 'здоровье',
            'news' => [
                '1' => 'Названа привлекательная сторона ношения масок при коронавирусе',
                '2' => 'ВОЗ рекомендовала два новых препарата для лечения пациентов с COVID-19',
                '3' => 'Названа привлекательная сторона ношения масок при коронавирусе',
                '4' => 'Ягоды годжи защищают от возрастной потери зрения',
            ],
        ],

    ];


    public function category()
    {
        return view('category', [
            'title' => $this->title,
            'listCategory' => $this->listCategory,
        ]);
    }
}
