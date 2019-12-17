@extends('layout', ['theme' => 'rent'])
    @section('content')
    @include('header', ['theme' => 'rent'])


<div class="buy__content">

    <!-- Карточка -->
    <div class="card buy__card">
        <div class="card-thumbs">
            <ul>
                <li>
                    <img src="/img/img__card-01.jpg" alt="Фото квартиры" class="card-thumbs__image">
                    <!-- <a href="javascript:void(0);" class="card-thumbs__item">
                    </a> -->
                </li>
                <li>
                    <img src="/img/img__card-02.jpg" alt="Фото квартиры" class="card-thumbs__image">
                    <!-- <a href="javascript:void(0);" class="card-thumbs__item">
                    </a> -->
                </li>
                <li>
                    <img src="/img/img__card-03.jpg" alt="Фото квартиры" class="card-thumbs__image">
                    <!-- <a href="javascript:void(0);" class="card-thumbs__item">
                    </a> -->
                </li>
            </ul>
            <span class="card__price">5 400 000 ₽</span>
        </div>
        <div href="javascript:void(0);" class="card__info">
            <div class="card__properties">
                <span class="card__properties-item card__rooms">1 комната</span>
                <span class="card__properties-item card__square">52,4 м²</span>
                <span class="card__properties-item card__floor">11/12 этаж</span>
            </div>
            <span class="card__address">мкр. Завокзальный, ул. Севастопольская, 27б</span>
        </div>
        <a href="javascript:void(0);" class="button button_primary">Позвонить</a>
        <a href="javascript:void(0);" class="button button_secondary">Заказать звонок</a>
    </div

<!-- Нижнее меню -->
<div class="menu-bottom">
    <a href="/buy-map" class="link link_map">Показать на карте</a>
    <a href="javascript:void(0);" class="link link_sort">Сортировать</a>
</div>



    @endsection
