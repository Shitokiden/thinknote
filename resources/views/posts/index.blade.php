<x-app-layout>
    <x-slot name="index">
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>home</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>ThinkNote</h1>
            <div class="user">ユーザー名</div>
    

            <div class='posts'>
            </div>
    
            <a href='/posts/create'>create</a>
    </html>
</x-app-layout>