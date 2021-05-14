<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
{{--        <link rel="stylesheet" href="/css/styles">--}}
{{--        <script src=""--}}
        <body>
        @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
        <footer>
            <p>teste &copy; 2020</p>
        </footer>
        </body>
    </head>
</html>
