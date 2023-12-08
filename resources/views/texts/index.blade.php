<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-slot name="header">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sharing Class</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    </x-slot>
    <body class="antialiased">
        <h1>Sharing Class <教科書一覧></h1>
        <a href='/posts/create'>create</a>
        <h2 class='title'>
            <a href="/texts/{{ $text->id }}">{{ $text->title }}</a>
        </h2>
        <div class='textbooks'>
            @foreach($textbooks as $textbook)
            <div class='textbooks'>
                <p>
                        <h2>教科書名:</h2>
                        <h2 class='name'>{{ $textbook->name }}</h2>
                    </p>
                    <p>
                        <h2>状態:</h2>
                        <h2 class='condition'>{{ $textbook->condition }}</h2>
                    </p>
                    <p>
                        <h2>価格:</h2>
                        <h2 class='price'>{{$textbook->price}}</h2>
                    </p>
                    <h2>Chat</h2>
            </div>
            <div>----------------------------------------------------------------------------</div>
            @endforeach
        </div>
        
    </body>
</html>
