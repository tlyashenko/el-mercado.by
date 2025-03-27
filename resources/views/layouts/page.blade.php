@php use App\Modules\Settings\Enums\OptionEnum; @endphp
@inject('settings', 'App\Modules\Settings\Services\SettingsService')

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>{{ $page->meta_title ?: $page->title }}</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE = edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="{{ $page->meta_keywords }}">
    <meta name="description" content="{{ $page->meta_description }}" />
    @foreach($page->og_tags as $tag)
        <meta property="og:{{ $tag['property'] }}" content="{{ $tag['content'] }}"/>
    @endforeach
    <link rel="icon" type="image/png" href="static/images/general/favicon.png">
    <link rel="shortcut icon" href="static/images/general/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" type="text/css" href="static/css/styles.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'"><!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]--><link rel="preload" fetchpriority="high" as="image" href="static/images/content/header--mobile.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="static/images/content/header.webp" type="image/webp">
</head>
<body class="page-index ">

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

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer-top__logo"><img class="svg" src="static/images/general/logo.svg" alt="Mercado"></div>
            <div class="footer-top__info">
                <p>{{ $settings->getOption(OptionEnum::LEGAL_ENTITY_TITLE) }}</p>
                <p>{{ $settings->getOption(OptionEnum::LEGAL_ADDRESS) }}</p>
            </div>
            <div class="footer-top__info">
                <p>{{ $settings->getOption(OptionEnum::BANK_INFO_1) }}</p>
                <p>{{ $settings->getOption(OptionEnum::BANK_INFO_2) }}</p>
            </div>
            <div class="footer-top__contacts">
                <p>Почта: <a href="mailto:{{ $settings->getOption(OptionEnum::EMAIL) }}">{{ $settings->getOption(OptionEnum::EMAIL) }}</a></p>
                <p>Телефон: {{ $settings->getOption(OptionEnum::PHONE) }}</p>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__copy">© {{ date('Y') }} Все права защищены</div>
            <a class="footer-bottom__link" href="https://forkdom.com" target="_blank">
                <div class="footer-bottom__name">Сделано в Forkdom Solutions </div>
                <div class="footer-bottom__logo"><img class="svg" src="static/images/general/logo__www.svg" alt="Mercado"></div>
            </a>
        </div>
    </div>
</footer>

@widget('feedbackModal')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="static/js/libs.min.js"></script>
<script src="static/js/jquery.inputmask.js"></script>
<script src="static/js/main.js"></script>
</body>
</html>
