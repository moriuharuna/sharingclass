<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sharing Class</title>
    </head>
    <body>
        <h1>Sharing Class <投稿></h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="class_name">
                <h2>授業名</h2>
                <input type="text" name="post[class_name]" placeholder="授業名"/>
            </div>
            <div class="teacher">
                <h2>先生</h2>
                <input type="text" name="post[teacher]" placeholder="先生"/>
            </div>
            <div class="term">
                <h2>時期</h2>
                <select id="" name="post[term]">
                    <option value="">評価方法を選択してください</option>
                    <option value=0>前期</option>
                    <option value=1>後期</option>
                </select>
            </div>
            <div class="method">
                <h2>授業形式</h2>
                <select id="" name="post[method]">
                    <option value="">授業形式を選択してください</option>
                    <option value=0>対面</option>
                    <option value=1>オンライン</option>
                    <option value=2>オンデマンド</option>
                    <option value=3>ハイフレックス</option>
                </select>
            </div>
            <div class="evaluation">
                <h2>評価方法</h2>
                <select id="" name="post[evaluation]">
                    <option value="">評価方法を選択してください</option>
                    <option value=0>テストのみ</option>
                    <option value=1>レポートのみ</option>
                    <option value=2>テスト・レポート</option>
                    <option value=3>平常点</option>
                </select>
            </div>
            <div class="fulfillment">
                <h2>授業充実度</h2>
                <select id="" name="post[textbook_presence]">
                    <option value="">授業充実度を選択してください</option>
                    <option value=0>1</option>
                    <option value=1>2</option>
                    <option value=2>3</option>
                    <option value=3>4</option>
                    <option value=4>5</option>
                </select>
            </div>
            <div class="obtaining_unit_ease">
                <h2>楽単</h2>
                <select id="" name="post[textbook_presence]">
                    <option value="">楽単度を選択してください</option>
                    <option value=0>1</option>
                    <option value=1>2</option>
                    <option value=2>3</option>
                    <option value=3>4</option>
                    <option value=4>5</option>
                </select>
            </div>
            <div class="textbook_presence">
                <h2>教科書</h2>
                <select id="" name="post[textbook_presence]">
                    <option value="">教科書の有無を選択してください</option>
                    <option value=0>あり</option>
                    <option value=1>なし</option>
                </select>
            </div>
            <div class="supplementaly_information">
                <h2>補足情報</h2>
                <textarea name="post[supplementaly_information]" placeholder="補足情報"></textarea>
            </div>
            <div class="price">
                <h2>価格</h2>
                <input type="number" name="textbook[price]" placeholder="価格"/>
            </div>
            <div class="name">
                <h2>教科書名</h2>
                <input type="text" name="textbook[name]" placeholder="教科書名"/>
            </div>
            <div class="exchange">
                <h2>交換</h2>
                <select id="" name="textbook[exchange]">
                    <option value="">交換の可否を選択してください</option>
                    <option value=0>可能</option>
                    <option value=1>不可能</option>
                </select>
            </div>
            <div class="condition">
                <h2>状態</h2>
                <select id="" name="textbook[condition]">
                    <option value="">教科書の状態を選択してください</option>
                    <option value=0>新品未使用</option>
                    <option value=1>未使用に近い</option>
                    <option value=2>目立った傷や汚れなし</option>
                    <option value=3>やや傷や汚れあり</option>
                    <option value=4>傷や汚れあり</option>
                    <option value=5>全体的に状態が悪い</option>
                </select>
            </div>
            <div class="supplementaly_information">
                <h2>補足情報</h2>
                <textarea name="textbook[supplementaly_information]" placeholder="補足情報"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>