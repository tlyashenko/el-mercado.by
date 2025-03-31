@extends('layouts.page')

@section('page', $page)

@section('content')
    {!! $page->content !!}

    <section class="section__about">
        <div class="container">
            <div class="about__name">
                <h2>Как купить хамон в Минске?</h2>
            </div>
            <div class="about__intro">
                <p>Просто выберите сорт хамона, оформите заказ на сайте, и наш курьер доставит его вам в удобное время. Мы предлагаем разнообразие популярных сортов хамона: от классического Серрано до премиального Иберико. Убедитесь в качестве наших продуктов сами!</p>

                <p><strong>Почему наши клиенты выбирают нас?</strong></p>

                <ul>
                    <li>Лучшие цены на хамон в Минске.</li>
                    <li>Экспресс-доставка хамона в Минск с гарантией свежести.</li>
                    Надежность и отличное обслуживание.</li>
                </ul>

                <p>Не упустите шанс побаловать себя или своих близких лучшими деликатесами из Европы! Сделайте заказ прямо сейчас, чтобы купить хамон в Минске с доставкой по лучшей цене.</p>
            </div>
            <picture class="about__img">
                <source media="(min-width: 768px)" srcset="static/images/content/about--desk.webp"><img src="static/images/content/about--mobile.webp" alt="Mercado" loading="lazy">
            </picture>
        </div>
    </section>

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
