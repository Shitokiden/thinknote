<x-app-layout>
    <x-slot name="create">
    </x-slot>
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>posts</title>
        </head>
        <body>
            <h1>作成</h1>
            
            <form action="/posts" method="POST">
                @csrf
                <div class="name">
                    <h2>name</h2>
                    <input type="text" name="post[name]" placeholder="タイトル" />
                    <p class="title__error" style="color:red">タイトルなし</p>
                </div>
                <div class="theme">
                    <h2>Body</h2>
                    <textarea name="post[theme]" placeholder="テーマ"></textarea>
                    <p class="body__error" style="color:red">テーマなし</p>
                </div>
                <input type="submit" value="保存"/>
            </form>
            <div class="back">[<a href="/">back</a>]</div>
        </body>
    </html>
</x-app-layout>