<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    {{--Styling--}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{--Favicons--}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="/public/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    {{--Metatags--}}
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Your Advertising Solution - Boost Your Business with JA Advertising">
    <meta name="keywords" content="Ja advertising, advertising services, digital marketing, online advertising, Ja, Marketing, Leads">
    <meta name="author" content="J Advertising">
    <meta name="robots" content="index, follow">
</head>
<body>
<header>
    @include('components.navigation')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('components.footer')
</footer>

{{--Javascript--}}
<script src="{{ mix('/js/app.js') }}"></script>
{{--Google Captcha --}}
<script src="https://www.google.com/recaptcha/api.js?render=6LcFda4oAAAAAOe0O2sTVtx7oY6dWeMbTSEs40w4"></script>
</body>
</html>
