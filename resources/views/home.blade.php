@extends('layouts.app')

@section('content')

    <div class="header">
        <div class="header__inner">
            <h1 class="header__title">AQTOBE FÝTBOL LIGASY</h1>
            <hr class="header__hr">
            <h6><strong>AQTFL</strong> - It is a long established fact that a reader will be distracted by the readable content.</h6>
            <button class="btn">Стать участником</button>
        </div>
    </div>


    <!-- <div class="member">
        <div class="member__item">
            <h1>стань участником турнира</h1>
            <p>Оставьте свои данные в форме, ваш персональный специалист свяжется с вами в ближайшее время!</p>
        </div>
        <div class="member__item">
            <input type="text" class="form-control" placeholer="Ваше имя">
            <input type="text" class="form-control" placeholer="Ваше имя">
            <button class="btn">Оставить заявку</button>
        </div>
    </div> -->


    <div class="news">
        <h1 class="news__title">Новости</h1>
        <div class="phone">
            <img src="/img/image-phone.png" class="phone__img">
        </div>
        
        <p class="news__text">Следите за нами в нашем инстаграм!</p>
        <button class="btn">перейти в инстаграм</button>
    </div>

@endsection
