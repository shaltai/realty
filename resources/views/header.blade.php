<div class="header header_buy">
    @php
    if(empty($theme)) {
        $theme = 'buy';
    }

    switch ($theme) {

        case 'buy':
        $themeColor = '#30D0F0';
        $greyDarkest = '#374043';
        $greyDark = '#A5B5B9';
        $greyMid = '#B9B2A6';
        $greyLight = '#EAEEEE';
        $greyLightest = '#F8F9F9';
        break;

        case 'rent':
        $themeColor = '#FF9C00';
        $greyDarkest = '#443E35';
        $greyDark = '#746A5B';
        $greyMid = '#B9B2A6';
        $greyLight = '#EEEDEA';
        $greyLightest = '#F9F9F8';
        break;

        default:
        $themeColor = '#30D0F0';
        break;
    }
    @endphp
    @if(!empty($back))
        <a href="{{ $_SERVER['HTTP_REFERER'] ?? '' }}" class="header__back">← Купить</a>
        <img class="header__burger burger" src="/ico/icon__burger_dark.svg" alt="Иконка меню">
    @else
        <a href="/" class="header__logo logo">
            @svg('/img/img__logo.svg', {{ $themeColor }})
        </a>
        <img class="header__burger burger" src="/ico/icon__burger_dark.svg" alt="Иконка меню">
        <div class="subheader">
            <h1 class="heading heading_subheader heading_buy">Купить</h1>
            <div class="subheader__slider">
                <label class="filter-tag subheader__filter-item">
                    <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                    <span class="filter-tag__caption checked">квартира</span>
                </label>
                <label class="filter-tag subheader__filter-item">
                    <input class="filter-tag__checkbox" name="house" type="checkbox" value="">
                    <span class="filter-tag__caption">дом</span>
                </label>
                <label class="filter-tag subheader__filter-item">
                    <input class="filter-tag__checkbox" name="land" type="checkbox" value="">
                    <span class="filter-tag__caption">участок</span>
                </label>
                <label class="filter-tag subheader__filter-item">
                    <input class="filter-tag__checkbox" name="room" type="checkbox" value="">
                    <span class="filter-tag__caption">комната</span>
                </label>
                <a href="/buy-filter" class="link link_buy subheader__link">Фильтры</a>
            </div>
        </div>
    @endif

</div>
