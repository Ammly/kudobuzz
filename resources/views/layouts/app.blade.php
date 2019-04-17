<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kudobuzz Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body class="font-lato bg-grey-lightest tracking-wide tracking-normal">
        <div id="app">
            @include('layouts.header')

            <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">

                @include('layouts.sidebar')

                <router-view></router-view>

            </div>

            @include('layouts.footer')

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
