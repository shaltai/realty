@extends('layout', ['theme' => 'buy'])
    @section('content')
    @include('header', ['back' => true])


    <div class="buy__filter">

        <!-- Фильтр "Тип недвижимости" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Тип недвижимости</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">квартира</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">дом</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">комната</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">участок</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">гараж</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">доля</span>
                    </label>
                </div>

                <div class="filter-item__inputs">
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Новостройка</p>
                    </label>
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Вторичка</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Количество комнат" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Количество комнат</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">студия</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">1</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">2</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">3</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">4+</span>
                    </label>
                </div>

                <div class="filter-item__tags">
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Только с фото</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Продавец" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Продавец</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">собственник</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">агент</span>
                    </label>
                </div>

                <div class="filter-item__tags">
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Только с фото</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Цена" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Цена, млн. р</h3>
                <div class="filter-item__inputs">
                    <label class="text-field filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="от">
                    </label>
                    <label class="text-field filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="до">
                    </label>
                </div>
                <div class="filter-item__inputs">
                    <label class="radio filter-item__radio">
                        <input class="radio__input" name="priceBuy" type="radio" value="">
                        <p class="radio__mark">За квартиру</p>
                    </label>
                    <label class="radio filter-item__radio">
                        <input class="radio__input" name="priceBuy" type="radio" value="">
                        <p class="radio__mark">За кв. метр</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Район" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Район</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">область на карте</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">центральный</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">лазаревский</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">Хостинский</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">Адлерский</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Площадь, м²" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Площадь, м²</h3>
                <div class="filter-item__inputs">
                    <p class="filter-item__text">Общая</p>
                    <label class="text-field text-field_half filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="от">
                    </label>
                    <label class="text-field text-field_half filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="до">
                    </label>
                </div>
                <div class="filter-item__inputs">
                    <p class="filter-item__text">Жилая</p>
                    <label class="text-field text-field_half filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="от">
                    </label>
                    <label class="text-field text-field_half filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="до">
                    </label>
                </div>
                <div class="filter-item__inputs">
                    <p class="filter-item__text">Кухня</p>
                    <label class="text-field text-field_half filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="от">
                    </label>
                    <label class="text-field text-field_half filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="до">
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Этаж" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Этаж</h3>
                <div class="filter-item__inputs">
                    <label class="text-field filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="от">
                    </label>
                    <label class="text-field filter-item__text-field">
                        <input class="text-field__input" name="" type="number" placeholder="до">
                    </label>
                </div>
                <div class="filter-item__inputs">
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Не первый</p>
                    </label>
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Не последний</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Санузел" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Санузел</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">раздельный</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">совмещённый</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">два и более</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Тип дома" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Тип дома</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">кирпичный</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">монолитный</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">блочный</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">панельный</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">кирпично-монолитный</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Лифт" -->
        <div class="filter-item">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Лифт</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">1</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">2</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">3</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">4+</span>
                    </label>
                </div>
                <div class="filter-item__inputs">
                    <label class="checkbox filter-item__checkbox">
                        <input class="checkbox__input" name="" type="checkbox" value="">
                        <p class="checkbox__mark">Есть грузовой</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Фильтр "Срок публикации" -->
        <div class="filter-item filter-item__period">
            <div class="filter-item__container">
                <h3 class="heading heading_filter-item">Срок публикации</h3>
                <div class="filter-item__tags">
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy checked">15 минут</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">1 час</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">3 часа</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">8 часов</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">1 сутки</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">2 суток</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">Неделя</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">2 недели</span>
                    </label>
                    <label class="filter-tag filter-item__tag">
                        <input class="filter-tag__checkbox" name="apartments" type="checkbox" value="">
                        <span class="filter-tag__caption filter_buy">Месяц и больше</span>
                    </label>
                </div>
            </div>
        </div>

        <a href="javascript:void(0);" class="button button_secondary button_big">Сохранить поиск</a>
        <a href="javascript:void(0);" class="button button_secondary button_big">Сбросить фильтр</a>

        <!-- Нижнее меню -->
        <div class="menu-bottom menu-bottom_filled">
            <a href="javascript:void(0);" class="link link_filter-search">Показать варианты</a>
            <a href="javascript:void(0);" class="link link_filter-map">Показать на карте</a>
        </div>

    </div>





    @endsection
