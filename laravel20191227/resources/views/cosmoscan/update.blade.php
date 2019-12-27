@extends('layouts.common')
@section('content')
<form action="/blog/public/cosmoscan/update"  method="POST">
<!--resources/views/cosmoscan/update.blade.php-->

   {{csrf_field()}}

    <p>氏名<input type="text" name="name"></p>
    <p>年齢<input type="text" name="age"></p>
    <p>住所<textarea name="address" id="" cols="30" rows="10"></textarea></p>
    <p><input type="submit" value="送信"></p>
</form>
@endsection
