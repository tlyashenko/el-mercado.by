@php use App\Modules\Settings\Enums\OptionEnum; @endphp
@inject('settings', 'App\Modules\Settings\Services\SettingsService')

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Mercado</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE = edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="static/images/general/favicon.png">
    <link rel="shortcut icon" href="static/images/general/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" type="text/css" href="static/css/styles.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'"><!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]--><link rel="preload" fetchpriority="high" as="image" href="static/images/content/header--mobile.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="static/images/content/header.webp" type="image/webp">
</head>
<body class="page-index ">

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
<div class="overlay"></div>
<div class="popup" id="popup__call"><a class="popup__close" href="#"> <img src="static/images/general/close.svg" alt=""></a>
    <div class="popup__title">Обратный звонок</div>
    <div class="popup__desc">Оставьте контакт, и мы перезвоним вам в удобное для вас время, чтобы рассказать о продукции!</div>

    <form class="form">
        {{ csrf_field() }}
        <label class="popup__label">
            <input class="popup__input" name="name" type="text" placeholder="Ваше имя">
            <div class="error__label" id="name-error">Введите Ваше имя</div>
        </label>
        <label class="popup__label">
            <input class="popup__input" name="phone" type="tel" placeholder="+375 __ ___ __ __">
            <div class="error__label" id="phone-error">Введите Ваш номер телефона</div>
        </label>
        <label class="popup__label">
            <textarea class="popup__textarea" name="comment" placeholder="Комментарий (не обязательно)"></textarea>
            <div class="error__label" id="comment-error"></div>
        </label>
        <button class="btn popup-form__btn" type="submit">Отправить</button>
    </form>
</div>

<div class="popup__thanks" dis><a class="popup__close" href="#"> <img src="static/images/general/close.svg" alt=""></a>
    <div class="popup__title">Обратный звонок</div>
    <div class="popup__desc">Спасибо! Ваш запрос отправлен. Мы перезвоним вам в ближайшее время. Или заказывайте в <a href="https://t.me/@MercadoBot">@MercadoBot.</a></div>
    <button class="btn popup-form__btn popup-form__close" type="submit">Закрыть</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="static/js/libs.min.js"></script>
<script src="static/js/jquery.inputmask.js"></script>
<script src="static/js/main.js"></script>
</body>
</html>
