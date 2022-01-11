@extends('templates.main')

@section('content')
    <h1 class="title">Главная страница</h1>
    <div class="deal container">
        <div class="deal-items">
            <div class="deal-items__item deal-item">
                <img
                    class="deal-item__photo"
                    src="https://picsum.photos/250/250"
                    alt="photo"
                />
                <a class="deal-item__layer" href="#">
                    <p class="deal-item__layer_text">30% OFF</p>
                    <h2 class="deal-item__layer_title">FOR WOMEN</h2>
                </a>
            </div>

            <div class="deal-items__item deal-item">
                <img
                    class="deal-item__photo"
                    src="https://picsum.photos/250/250"
                    alt="photo"
                />
                <a class="deal-item__layer" href="#">
                    <p class="deal-item__layer_text">HOT DEAL</p>
                    <h2 class="deal-item__layer_title">FOR MEN</h2>
                </a>
            </div>

            <div class="deal-items__item deal-item">
                <img
                    class="deal-item__photo"
                    src="https://picsum.photos/250/250"
                    alt="photo"
                />
                <a class="deal-item__layer" href="#">
                    <p class="deal-item__layer_text">NEW ARRIVALS</p>
                    <h2 class="deal-item__layer_title">FOR WOMEN</h2>
                </a>
            </div>
        </div>

        <div class="deal-items__bottom deal-bottom">
            <img
                class="deal-bottom__photo"
                src="https://picsum.photos/250/250"
                alt="photo"
            />
            <a class="deal-item__layer" href="#">
                <p class="deal-item__layer_text">LUXIROUS & TRENDY</p>
                <h2 class="deal-item__layer_title">ACCESORIES</h2>
            </a>
        </div>
    </div>
    <div class="suggestion-bottom">
        <a href="/catalog" class="suggestion-button">
            <span class="suggestion-button__text">Browse All Product</span>
        </a>
    </div>
@endsection
