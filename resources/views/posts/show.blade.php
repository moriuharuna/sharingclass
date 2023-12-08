<x-app-layout>
    <x-slot name="header">
        　投稿一覧
    </x-slot>
   <h1>Sharing Class <授業情報></h1>
    <a href='/posts/create'>create</a>
    <div class='posts'>
        <p>
            <h2>授業名:</h2>
            <h2 class='class_name'>{{ $post->class_name }}</h2>
        </p>
        <p>
            <h2>先生:</h2>
            <h2 class='teacher'>{{ $post->teacher }}</h2>
        </p>
        <p>
            <h2>時期:</h2>
            <h2 class='term'>{{$post->term}}</h2>
        </p>
        <p>
            <h2>評価方法:</h2>
            <h2 class='evaluation'>{{ $post->evaluation}}</h2>
        </p>
        <p>
           <h2>授業充実度:</h2> 
            <h2 class='fulfillment'>{{$post->fulfillment}}</h2>
        </p>
        <p>
            <h2>楽単:</h2>
            <h2 class='obtaining_unit_ease'>{{$post->obtaining_unit_ease}}</h2>
        </p>
        <p>
            <h2>教科書:</h2>
            <h2 class='textbook_presence'>{{$post->textbook_presence}}</h2>
        </p>
        <p>
            <h2>補足情報</h2>
            <h2 class='supplementaly_information'>{{$post->su}}</h2>
        </p>
    </div>
    <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
</x-app-layout>
