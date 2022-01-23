@extends('templates.main')

@section('content')
    <div class="deal container">
        <p class="deal-item__layer_title">Всегда свежие и интересные новости</p>
        <div class=" deal-items">
            @foreach($categories as $category)
                <div class="deal-items__item deal-item">
                    <img class="deal-item__photo" src="https://picsum.photos/250/250" alt="photo"/>
                    <a class="deal-item__layer" href="{{route('one_category', $category->id)}}">
                        <h2 class="deal-item__layer_title">{{$category['title']}}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="transition">
        <a href="{{route('all_category')}}" class="transition-button">
            <span class="transition-button__text">Перейти к разделам</span>
        </a>
    </div>
@endsection
