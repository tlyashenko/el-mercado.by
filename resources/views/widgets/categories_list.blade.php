@php use App\Modules\Settings\Enums\OptionEnum;use Illuminate\Support\Facades\Storage; @endphp
@inject('settings', 'App\Modules\Settings\Services\SettingsService')

<section class="section__catalog">
    <div class="container">
        <div class="catalog__list">
            @foreach($categories as $category)
                <div class="catalog__item">
                    <img class="catalog__img" data-src="{{ Storage::url($category->image) }}"
                         alt="{{ $category->title }}">
                    <div class="catalog__title">{{ $category->title }}</div>
                    <div class="catalog__description">{{ $category->description }}</div>
                </div>
            @endforeach
        </div>
        <a class="btn why__btn" target="_blank" href="{{ $settings->getOption(OptionEnum::TELEGRAM) }}"> <img
                class="svg" src="static/images/content/logo_icon.svg" alt="Mercado">Купить через Telegram</a>
    </div>
</section>
