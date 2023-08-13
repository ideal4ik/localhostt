@extends('layout')

@section('content')
    <div class="auth_content">
        <a href="{{ route('login') }}" class="auth_buttons">
            <div class="auth_buttons_text">Войти на сайт</div>
        </a>
        <a href="{{ route('register') }}" class="auth_buttons">
            <div class="auth_buttons_text">Регистрация</div>
        </a>
    </div>
@endsection
