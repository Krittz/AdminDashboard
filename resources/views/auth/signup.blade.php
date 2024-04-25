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
                <div class="input-div">
                    <div class="i"><i class="fas fa-user"></i></div>
                    <div class="div">
                        <h5>Nome</h5>
                        <input type="text" name="name" id="name" class="input"
                            value="{{ old('name') }}" />
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-at"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" id="email" class="input"
                            value="{{ old('email') }}" />
                        @error('email')
                            <p class="text-danger">{{ $message }}</p> <!-- Exibindo mensagem de erro -->
                        @enderror
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"><i class="fas fa-lock"></i></div>
                    <div class="div">
                        <h5>Senha</h5>
                        <input type="password" name="password" id="password" class="input">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p> <!-- Exibindo mensagem de erro -->
                        @enderror
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Repetir senha</h5>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="input" />
                        <!-- Note que o campo de repetir senha deve ser nomeado conforme esperado pelo Laravel -->
                    </div>
                </div>
                <a href="{{ route('login') }}">Já possui conta?</a>
                <button type="submit" class="btn">Cadastrar-se</button> <!-- Troquei input por button para melhor semântica -->
            </form>
        </div>
    </div>
    <script src="{{ asset('js/auth.js') }}"></script>
</body>

</html>
