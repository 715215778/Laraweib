<!DOCTYPE html>
<html>
<style>
    body {
        font-size: 14px;
        font-weight: normal;
    }

    nav.navbar.navbar-expand-lg {
        margin-bottom: 20px;
    }
</style>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
{{--    <link rel="stylesheet" href="/css/app.css">--}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
{{--<script src="js/app.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>