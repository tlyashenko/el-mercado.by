@extends('layouts.page')

@section('page', $page)

@section('content')
    {!! $page->content !!}

    <section class="section__why">
        <div class="container">
            <div class="why__wrap">
                <div class="why__title">Доставка хамона в Минске – удобно и быстро</div>
                <div class="why__list">
                    <div class="why__item"> <img class="why-item__img" src="static/images/content/why_1.svg" alt="Mercado">
                        <div class="why-item__title">Быстрая доставка</div>
                        <div class="why-item__intro">Мы доставим хамон и сыры в любой уголок Минска в кратчайшие сроки.</div>
                    </div>
                    <div class="why__item"> <img class="why-item__img" src="static/images/content/why_2.svg" alt="Mercado">
                        <div class="why-item__title">Комфорт и удобство</div>
                        <div class="why-item__intro">Закажите через наш сайт и получите ваш деликатес прямо на дом или в офис.</div>
                    </div>
                    <div class="why__item"> <img class="why-item__img" src="static/images/content/why_3.svg" alt="Mercado">
                        <div class="why-item__title">Гарантия качества</div>
                        <div class="why-item__intro">Мы обеспечиваем отличные условия для транспортировки, чтобы вы могли насладиться вкусом нашей продукции.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @widget('categoriesList')
@endsection
