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
            <form action="#">
                <img src="{{ asset('img/avatar.svg') }}" alt="#">
                <h2 class="title">Cadastre-se</h2>
                <div class="input-div">
                    <div class="i"><i class="fas fa-user"></i></div>
                    <div class="div">
                        <h5>Nome</h5>
                        <input type="text" name="name" id="name" class="input" />
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-at"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" id="email" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"><i class="fas fa-lock"></i></div>
                    <div class="div">
                        <h5>Senha</h5>
                        <input type="password" name="password" id="password" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Repetir senha</h5>
                        <input type="password" name="repeat-password" id="repeat-password" class="input" />

                    </div>
                </div>
                <a href="{{ route('login') }}">Já possui conta?</a>
                <input type="submit" value="Cadastrar-se" class="btn">
            </form>
        </div>
    </div>
    <script src="{{ asset('js/auth.js') }}"></script>

</body>

</html>
