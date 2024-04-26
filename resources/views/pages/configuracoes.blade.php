<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('title', 'Animais | CrAn')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection
@section('js')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection

@include('includes.head')

<body>

    <div class="container">


        @include('includes.sidebar')
        <div class="content">

            @include('includes.nav')
        </div>





    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>


</html>
