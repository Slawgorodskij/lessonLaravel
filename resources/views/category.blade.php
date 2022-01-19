@extends('templates.main')

@section('content')
    <section class="visual">
        @foreach($list_categories as $category)
            <figure class="visual-block">
                <div class="visual-block__photo">
                    <img
                        class="visual-block__photo_image"
                        src="https://picsum.photos/250/300"
                        alt="photo"
                    />
                </div>
                <figcaption class="visual-block__text">
                    <a href="{{route('one_category', $category->id)}}">
                        <h2 class="visual-block__text-title">{{$category->title}}</h2>
                    </a>
                    @for($i=0; $i<3; $i++)
                        @if(isset($category['news'][$i]))
                            <a href="{{route('one_news',$category['news'][$i]['id'])}}">
                                <h2>{{$category['news'][$i]['title']}}</h2>
                            </a>
                            <p>{{$category['news'][$i]['description']}}</p>
                        @endif
                    @endfor
                </figcaption>
            </figure>
        @endforeach
        <div class="transition">
            <a href="/" class="transition-button">
                <span class="transition-button__text">Перейти на Главную страницу</span>
            </a>
        </div>
    </section>
@endsection
