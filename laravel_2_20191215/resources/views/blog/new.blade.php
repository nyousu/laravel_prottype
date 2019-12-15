<form action="/blog/public/blog/store"  method="POST">
<!--resources/views/blog/new.blade.php-->

   {{csrf_field()}}

    <p>タイトル<input type="text" name="title"></p>
    <p>内容<textarea name="content" id="" cols="30" rows="10"></textarea></p>
    <p><input type="submit" value="送信"></p>
</form>

<!-- フォームに必要な属性
　action...入力されたデータ送信先 
　method…getか postか -->