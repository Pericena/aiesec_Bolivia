@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
        <link rel="icon" href="{{ asset('assets/img/IconAIESEC.png') }}">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

        <title>AIESEC Bolivia</title>
    </head>
    {{-- @extends('plantilla.logo') --}}

    <div class="login">
        @error('email')
            <div class="alert alert-danger" role="alert">
                ¡La contraseña y/o correo ingresado es incorrecto!
            </div>
        @enderror
        <div class="login__content">
            <div class="login__forms">
                <form method="POST" action="{{ route('login') }}" class="login__registre" id="login-in">
                    @csrf
                    <h1 class="login__title">Iniciar sesión</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input id="email" type="email" placeholder="Usuario"
                            class="login__input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input id="password" type="password" placeholder="Contraseña"
                            class="login__input @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                    </div>

                    <button type="submit" class="login__button">
                        {{ __('Login') }}
                    </button>

                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
