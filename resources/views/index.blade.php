@extends('layouts.page')

@php use App\Modules\Settings\Enums\OptionEnum; @endphp
@inject('settings', 'App\Modules\Settings\Services\SettingsService')

@section('content')
    <section class="section__header">
        <div class="container">
            <picture class="header__img">
                <source media="(min-width: 768px)" srcset="static/images/content/header.webp"><img data-src="static/images/content/header--mobile.webp" alt="Mercado" loading="lazy">
            </picture>
            <div class="header__desc">
                <div class="header__top"> <img class="header__logo" src="static/images/general/logo.svg" alt="Mercado" width="132" height="121"><a class="header__phone" href="tel:+375 29 699 93 62"> <img src="static/images/general/phone.svg" alt="Mercado" width="18" height="18">{{ $settings->getOption(OptionEnum::PHONE) }}</a></div>
                <h1>Вкус Испании и Италии у вас дома</h1>
                <div class="header__intro">
                    <p>Mercado — это изысканные мясные деликатесы прямо из сердца Испании и Италии. Хамон, выдержанная ветчина, ароматные колбасы — мы привозим лучшее, чтобы вы могли насладиться подлинным вкусом Средиземноморья. </p>
                    <p>Ознакомьтесь с нашим каталогом и откройте мир гастрономических удовольствий!</p>
                </div>
                <div class="header__button"> <a class="btn header__btn" target="_blank" href="{{ $settings->getOption(OptionEnum::TELEGRAM) }}"> <img class="svg" src="static/images/content/logo_icon.svg" alt="Mercado">Купить через Telegram</a><a class="btn btn--transparent header__btn open__popup" href="#popup__call">Обратный звонок</a></div>
            </div>
        </div>
    </section>
    <section class="section__about">
        <div class="container">
            <div class="about__name">
                <h2>Mercádo —</h2>
            </div>
            <div class="about__intro">
                <p>Это семейная страсть к качественным продуктам и традициям. Мы сотрудничаем с лучшими производителями Испании и Италии, чтобы привезти вам мясные деликатесы, созданные по старинным рецептам.</p>
                <p>От хамона, выдержанного в горах, до колбас с пряными травами — каждый продукт рассказывает свою историю. </p>
                <p>Наша миссия — подарить вам вкус настоящего Средиземноморья, где бы вы ни находились.</p>
            </div>
            <picture class="about__img">
                <source media="(min-width: 768px)" srcset="static/images/content/about--desk.webp"><img src="static/images/content/about--mobile.webp" alt="Mercado" loading="lazy">
            </picture>
        </div>
    </section>
    <section class="section__why">
        <div class="container">
            <div class="why__wrap">
                <div class="why__title">Почему мы?</div>
                <div class="why__list">
                    <div class="why__item"> <img class="why-item__img" src="static/images/content/why_1.svg" alt="Mercado">
                        <div class="why-item__title">Экологичность</div>
                        <div class="why-item__intro">Продукция из чистых регионов с вольным выпасом без химии.</div>
                    </div>
                    <div class="why__item"> <img class="why-item__img" src="static/images/content/why_2.svg" alt="Mercado">
                        <div class="why-item__title">Традиции</div>
                        <div class="why-item__intro">Рецепты, проверенные веками, от мастеров Испании и Италии.</div>
                    </div>
                    <div class="why__item"> <img class="why-item__img" src="static/images/content/why_3.svg" alt="Mercado">
                        <div class="why-item__title">Высокое качество</div>
                        <div class="why-item__intro">Отборное сырье и строгий контроль на всех этапах производства.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @widget('categoriesList')
@endsection
