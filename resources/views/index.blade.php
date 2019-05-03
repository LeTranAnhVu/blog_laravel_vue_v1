<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
    <section id="app">
        @if(Session::has('status'))
            <h1>{{Session::get('status')}}</h1>
        @endif
        <router-view></router-view>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
