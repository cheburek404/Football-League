@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="mtop">
            <a href="{{ route('addMatch') }}" class="btn btn-primary">Добавить матчи</a>

            <!-- <a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a> -->
        </div>

        <div class="card card--match">
            <div class="card__inner">
                <div class="card__item">
                    <img src="/Images/1670174708.jpg" alt="" class="card__img">
                    <h4 class="card__club-name">SHANYRAQ</h4>
                </div>

                <div class="card__item">
                    <div class="card__time">
                        <h2>18:00</h2>
                    </div>
                </div>
                
                <div class="card__item">
                    <h4 class="card__club-name">AQTFL</h4>
                    <img src="/Images/1670174708.jpg" alt="" class="card__img">
                </div>
            </div>
        </div>
    </div>
    
@endsection
