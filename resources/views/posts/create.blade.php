<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sharing Class</title>
    </head>
    <body>
        <h1>Sharing Class <投稿></h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="授業名">
                <h2>授業名</h2>
                <input type="class_name" name="post[class_name]" placeholder="授業名"/>
            </div>
            <div class="先生">
                <h2>先生</h2>
                <input type="teacher" name="post[teacher]" placeholder="先生"/>
            </div>
            <div class="時期">
                <h2>時期</h2>
                <input type="term" name="post[term]" placeholder="時期"/>
            </div>
            <div class="授業形式">
                <h2>授業形式</h2>
                <input type="method" name="post[method]" placeholder="授業形式"/>
            </div>
            <div class="評価方法">
                <h2>評価方法</h2>
                <input type="evaluation" name="post[evaluation]" placeholder="評価方法"/>
            </div>
            <div class="授業充実度">
                <h2>授業充実度</h2>
                <input type="fulfillment" name="post[fulfillment]" placeholder="授業充実度"/>
            </div>
            <div class="楽単">
                <h2>楽単</h2>
                <input type="obtaining_unit_ease" name="post[obtaining_unit_ease]" placeholder="楽単"/>
            </div>
            <div class="教科書">
                <h2>教科書</h2>
                <input type="textbook_presence" name="post[textbook_presence]" placeholder="教科書"/>
            </div>
            <div class="補足情報">
                <h2>補足情報</h2>
                <textarea name="post[supplementaly_information]" placeholder="補足情報"></textarea>
            </div>
            <div class="images">
                <input type="file" name="images[]" multiple>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>