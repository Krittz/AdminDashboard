<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('title', 'Cadastro | CrAn')

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
            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <img src="{{ asset('img/avatar.svg') }}" alt="#">
                <h2 class="title">Cadastre-se</h2>
                @include('includes.input', [
                    'icon' => 'fas fa-user',
                    'title' => 'Nome',
                    'type' => 'text',
                    'name' => 'name',
                    'id' => 'name',
                ])
                @include('includes.input', [
                    'icon' => 'fas fa-at',
                    'title' => 'Email',
                    'type' => 'email',
                    'name' => 'email',
                    'id' => 'email',
                ])
                @include('includes.input', [
                    'icon' => 'fas fa-lock',
                    'title' => 'Senha',
                    'type' => 'password',
                    'name' => 'password',
                    'id' => 'password',
                ])
                @include('includes.input', [
                    'icon' => 'fas fa-lock',
                    'title' => 'Repetir senha',
                    'type' => 'password',
                    'name' => 'password_confirmation',
                    'id' => 'password_confirmation',
                ])
                <a href="{{ route('login') }}">Já possui conta?</a>
                <button type="submit" class="btn">Cadastrar-se</button>
            </form>

        </div>
    </div>
    <script src="{{ asset('js/auth.js') }}"></script>
</body>

</html>
