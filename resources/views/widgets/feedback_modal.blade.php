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
