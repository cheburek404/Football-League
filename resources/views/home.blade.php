@extends('layouts.app')

@section('content')

    <div class="header">
        <div class="container">
            <h1 class="header__title">AQTOBE FÝTBOL LIGASY</h1>
            <div class="header__line">
                <div class="header__line--circle"></div>
            </div>
            <h6><strong>AQTFL</strong> - It is a long established fact that a reader will be distracted by the readable content.</h6>
            <a href="#member" class="btn header__btn">Стать участником</a   >
        </div>
    </div>


    <club-table></club-table>


    <club-match></club-match>


    <div class="member" id="member">
        <div class="container">
            <div class="row member__item">
                <div class="col-3">
                    <h2>стань участником турнира</h2>
                </div>
                <div class="col-5 member__item--text">
                    <h6>Оставьте свои данные в форме, ваш персональный специалист свяжется с вами в ближайшее время!</h6>
                </div>
            </div>
            <form action="#">
                <div class="row member__item">
                    <div class="col-4">
                        <input type="text" class="member__item--input" placeholder="Ваше имя">
                    </div>
                    <div class="col-4">
                        <input type="text" class="member__item--input" placeholder="Телефон">
                    </div>
                    <div class="col-4">
                        <button class="btn member__item--btn">Оставить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="news">
        <div class="container">
            <h2>Новости</h2>
            <div class="news__phone">
                <img src="/img/image-phone.png" class="news__phone--img">
            </div>
            
            <p class="news__text">Следите за нами в нашем инстаграм!</p>
            <button class="btn news__btn">перейти в инстаграм</button>
        </div>
    </div>



    <div class="feedback">
        <div class="container">
            <div class="feedback__title">
                <h2>остались вопросы? задайте их нам</h2>
            </div>
            

            <form action="#">
                <div class="feedback__form">
                    <input type="text" class="feedback__form--input" placeholder="Ваше имя">
                    <input type="text" class="feedback__form--input" placeholder="Телефон">
                    <button class="btn feedback__form--btn">Оставить заявку</button>
                </div>
            </form>
        </div>
    </div>

@endsection
