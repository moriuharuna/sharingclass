<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sharing Class</title>
    </head>
    <body>
        <h1>Sharing Class <教科書投稿></h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="価格">
                <h2>価格</h2>
                <input type="price" name="post[price]" placeholder="価格"/>
            </div>
            <div class="状態">
                <h2>授業名</h2>
                <input type="condition" name="post[condition]" placeholder="状態"/>
            </div>
            <div class="補足情報">
                <h2>Body</h2>
                <textarea name="post[supplementaly_information]" placeholder="補足情報"></textarea>
            </div>
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>