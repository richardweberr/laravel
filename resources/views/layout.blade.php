<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Pacifico" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset ('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset ('css/style.css')}}" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
          crossorigin="anonymous">
</head>
<body>
<div class="flex-center position-ref full-height">
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links" >--}}
            {{--@auth--}}
                {{--<a href="{{ url('welcome') }}"><span class="noire>"welcome</span></a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}

                {{--@if (Route::has('register'))--}}
                    {{--<a href="{{ route('register') }}">Register</a>--}}
                {{--@endif--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}
</div>
<nav>
    @include('includes.navbar')
</nav>
<div>
    @yield('content')
</div>
<footer>
    @include('includes.footer')
</footer>
</body>
</html>
