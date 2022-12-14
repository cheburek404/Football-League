@extends('layouts.app')

@section('content')
    
    <div class="card card--600">
        <h4>Добавить матчи</h4><br>
        <div class="count">
            <div class="count__item">
                <label for="">Количество событий</label>
                <input type="text" id="add_events" class="form-control" name="count">
            </div>
            <div class="count__item">
                <button class="btn btn-success" onclick="addFields()" style="margin-left: 5px">Добавить</button>
            </div>
        </div><br>
            
        <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="match" id="match1">
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
                    <input type="text" name="time" class="form-control">
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

            <div id="match"></div>

            <button type="submit" class="btn btn-success mt-2">Сохранить</button>
            <a href="{{ route('showMatch') }}" class="btn btn-secondary mt-2">Назад</a>
        </form>
    </div>

    <script>
        function addFields(){
            var number = document.getElementById("add_events").value;
            var match = document.getElementById("match");

            while (match.hasChildNodes()) {
                match.removeChild(match.lastChild);
            }

            for (i=0;i<number;i++){
                var select1 = document.createElement("select");
                var select2 = document.createElement("select");
                var input = document.createElement("input");
                input.type = "text";
                input.class = "form-control";
                input.name = "event" + i;
                select1.name = "event" + i;
                select2.name = "event" + i;
                match.appendChild(select1);
                match.appendChild(input);
                match.appendChild(select2);
                match.appendChild(document.createElement("br"));
            }
        } 
    </script>
@endsection

