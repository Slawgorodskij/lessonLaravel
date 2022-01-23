@extends('templates.main')

@section('content')
    <section class="visual">
        @forelse ($list_news as $news)
            <figure class="visual-block">
                <div class="visual-block__photo">
                    <img class="visual-block__photo_image" src="https://picsum.photos/250/300" alt="photo"/>
                </div>
                <figcaption class="visual-block__text">
                    <a href="{{route('one_news', $news->id)}}">
                        <h2 class="visual-block__text-title">{{$news->title}}</h2>
                    </a>
                    <p> {{$news->description}}</p>
                </figcaption>
            </figure>
        @empty
            <p>Журналисты пишут интересующую вас статью, материал уже собрали.</p>
        @endforelse

        <div class="transition">
            <a href="{{route('all_category')}}" class="transition-button">
                <span class="transition-button__text">Перейти к разделам</span>
            </a>
        </div>
    </section>
@endsection
