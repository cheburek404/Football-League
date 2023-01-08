@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card--600">
            <h4>Добавить участника</h4><br>
            <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="">Название клуба</label>
                <input type="text" class="form-control" name="name" required><br>

                <label for="">Логотип клуба</label>
                <input type="file" class="form-control" name="logo_image" required><br>

                <button type="submit" class="btn btn-success mt-2">Сохранить</button>
                <a href="{{ route('admin') }}" class="btn btn-secondary mt-2">Назад</a>
            </form>
        </div>
    </div>
@endsection