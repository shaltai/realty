@extends('layout')
    @section('content')
        <div class="main-home">
            <header class="header header__home">
                <p class="header__city">Сочи</p>
                <img class="header__burger" src="/ico/icon__burger_light.svg" alt="Иконка меню"></img>
            </header>
            <img class="logo__home" src="/img/img__logo_light.svg" alt="Логотип"></img>
            <nav class="nav nav__home">
                <ul class="nav__list">
                    <li class="nav__item nav__home-buy">
                        <a href="/buy-list" class="nav__link">Купить</a>
                    </li>
                    <li class="nav__item nav__home-rent">
                        <a href="/rent-list" class="nav__link">Снять</a>
                    </li>
                    <li class="nav__item nav__home-commerce">
                        <a href="/commerce-list" class="nav__link">Коммерческая</a>
                    </li>
                    <li class="nav__item nav__home-add">
                        <a href="/new-listing" class="nav__link">Добавить <br>объявление</a>
                    </li>
                </ul>
            </nav>
            <div class="footer contacts-home">
                <div class="contacts-item contacts-item__phone">
                    <a href="tel:88008888888" class="contacts-item__title">8 800 888-88-88</a>
                    <a href="javascript:void(0)" class="phone__callback contacts-item__subtitle">Заказать звонок</a>
                </div>
                <div class="contacts-item contacts-item__whatsapp">
                    <a href="tel:88008888888" class="phone__number contacts-item__title">WhatsApp</a>
                    <a href="javascript:void(0)" class="whatsapp__text contacts-item__subtitle">Написать</a>
                </div>
            </div>
        </div>

    @endsection
