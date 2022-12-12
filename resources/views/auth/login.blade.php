@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="max-width:400px">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control" name="email" required><br>


                        <label for="password">{{ __('Пароль') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required><br>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Войти') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
