<x-app-layout>
    <x-slot name="header">
        　投稿一覧
    </x-slot>
   <h1>Sharing Class <授業情報></h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach($posts as $post)
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
                   <h2>授業充実度:</h2> 
                    <h2 class='fulfillment'>{{$post->fulfillment}}</h2>
                </p>
                <p>
                    <h2>楽単:</h2>
                    <h2 class='obtaining_unit_ease'>{{$post->obtaining_unit_ease}}</h2>
                </p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
           </div>
           <div>--------------------------------------------------------------------</div>
        @endforeach    
    </div>
</x-app-layout>
<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
