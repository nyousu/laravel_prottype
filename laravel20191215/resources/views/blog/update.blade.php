<form action="/blog/public/blog/update"  method="POST">
<!--resources/views/blog/update.blade.php-->

   {{csrf_field()}}

    <p>タイトル<input type="text" name="title"></p>
    <p>内容<textarea name="content" id="" cols="30" rows="10"></textarea></p>
    <p><input type="submit" value="送信"></p>
</form>

