<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- CSS -->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">        
    </head>
    <body>     
    @section('title')
    Welcome
    @endsection
    
    @extends('layouts.app')
    
    @section('content')

        <main>
            <h1>utot</h1>
        </main>

         
    </body>
    @endsection
</html>
