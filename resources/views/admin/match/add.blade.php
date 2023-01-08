@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card card--600">
            <h4>Добавить матчи</h4><br>
                
            <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <add-match></add-match>

                <button type="submit" class="btn btn-success mt-2">Сохранить</button>
                <a href="{{ route('showMatch') }}" class="btn btn-secondary mt-2">Назад</a>
            </form>
        </div>
    </div>
@endsection

