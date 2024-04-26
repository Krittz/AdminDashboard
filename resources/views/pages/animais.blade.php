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
        <!-- Sidebar Section -->
        <aside>
            @include('layout.sidebar')
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Animais</h1>

            @include('layout.table', [
                'tableTitle' => $tableTitle,
                'tableHeaders' => $tableHeaders,
                'tableData' => $tableData,
            ])



        </main>

        {{-- Nav --}}
        @include('layout.nav')

        <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
