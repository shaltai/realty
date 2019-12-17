@extends('layout', ['theme' => 'buy'])
    @section('content')
    @include('header', ['another' => 'test'])


    <!-- Карта -->
    <div class="buy__map">

        <div class="marker">
            <div class="marker__amount">4</div>
            <div class="marker__price">от 4,9 млн</div>
        </div>

        <div class="menu-bottom menu-bottom_transparent">
            <a href="javascript:void(0);" class="button button_map button_layers"><img src="/ico/icon__layers_buy.svg" alt="Показать слои" class="icon__layers_buy"></a>
            <a href="/buy-list" class="button button_map button_list"><img src="/ico/icon__list_buy.svg" alt="Показать списком" class="icon__list_buy"></a>
            <a href="javascript:void(0);" class="button button_map button_draw"><img src="/ico/icon__draw_buy.svg" alt="Нарисовать область" class="icon__draw_buy"></a>
        </div>
    </div>





    @endsection
