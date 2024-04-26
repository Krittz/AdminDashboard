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
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <img src="{{ asset('img/avatar.svg') }}" alt="#">
                <h2 class="title">Entrar</h2>
                @include('includes.input', [
                    'icon' => 'fas fa-envelope',
                    'title' => 'Email',
                    'type' => 'email',
                    'name' => 'email',
                    'id' => 'email',
                ])
                @include('includes.input', [
                    'icon' => 'fas fa-lock',
                    'title' => 'Password',
                    'type' => 'password',
                    'name' => 'password',
                    'id' => 'password',
                ])
                <a href="{{ route('signup') }}">Não possui conta?</a>
                <input type="submit" value="Entrar" class="btn">
            </form>

        </div>
    </div>
    <script src="{{ asset('js/auth.js') }}"></script>

</body>

</html>
