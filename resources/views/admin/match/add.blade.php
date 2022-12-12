@extends('layouts.app')

@section('content')
    
    <div class="card card--600">
        <h4>Добавить матчи</h4><br>
        <div class="count">
            <div class="count__item">
                <label for="">Количество событий</label>
                <input type="text" class="form-control" name="count">
            </div>
            <div class="count__item">
                <button class="btn btn-success" style="margin-left: 5px">Добавить</button>
            </div>
            <div class="count__item">
                <button class="btn btn-secondary" style="margin-left: 5px">Очистить все</button>
            </div>
        </div><br>
            
        <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="match" id="match">
                <div class="match__item">
                    <label for="">Название первого клуба</label>
                    <select class="form-select" required>
                        @foreach($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="match__item">
                    <label for="">Указать время</label>
                    <select class="form-select">
                        <option selected>16:00</option>
                        <option value="1">17:00</option>
                        <option value="2">18:00</option>
                        <option value="3">19:00</option>
                    </select>
                </div>
                <div class="match__item">
                    <label for="">Название второго клуба</label>
                    <select class="form-select" required>
                        @foreach($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>

            <button type="submit" class="btn btn-success mt-2">Сохранить</button>
            <a href="{{ route('showMatch') }}" class="btn btn-secondary mt-2">Назад</a>
        </form>
    </div>

@endsection