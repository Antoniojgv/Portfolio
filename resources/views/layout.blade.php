<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <div class="page-container page-container-dark"></div>

    @include('partials.nav')

    <main class="container my-4">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
