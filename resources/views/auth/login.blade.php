<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('title', 'Login | CrAn')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
@endsection

@include('includes.head')

<body>

    <img src="{{ asset('img/wave.png') }}" class="wave" />
    <div class="container">
        <div class="img">
            <img src="{{ asset('img/bg.svg') }}" alt="#">
        </div>
        <div class="login-content">
            <form action="#">
                <img src="{{ asset('img/avatar.svg') }}" alt="#">
                <h2 class="title">Entrar</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" id="username" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"><i class="fas fa-lock"></i></div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" id="password" class="input">
                    </div>
                </div>
                <a href="{{ route('signup') }}">Não possui conta?</a>
                <input type="submit" value="Entrar" class="btn">
            </form>
        </div>
    </div>
    <script src="{{ asset('js/auth.js') }}"></script>

</body>

</html>
