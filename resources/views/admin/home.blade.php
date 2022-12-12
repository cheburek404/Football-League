@extends('layouts.app')

@section('content')

    <div class="mtop">
        <a href="{{ route('addClub') }}" class="btn btn-primary">Добавить участника</a>
    </div>
    
    
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название клуба</th>
                <th scope="col">Логотип клуба</th>
                <th scope="col">Опции</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
            <tr>    
                <th scope="row">{{ $club->id }}</th>
                <td>{{ $club->name }}</td>
                <td><img class="table__img" src="/Images/{{ $club->logo_image }}"></td>
                <td>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
