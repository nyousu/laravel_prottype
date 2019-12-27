@extends('layouts.common')

@section('content')

<form action="/blog/public/cosmoscan/store"  method="POST">
<!--resources/views/cosmoscan/new.blade.php-->

   {{csrf_field()}}

    <p>氏名<input type="text" name="name"></p>
    <p>年齢<input type="text" name="age"></p>
    <!--<select name="skintype_id" id="">
        <option value="1">普通肌</option>
        <option value="2">乾燥肌</option>
        <option value="3">脂性肌</option>
        <option value="4">混合肌</option>
        <option value="5">敏感肌</option>
        </select>-->


    <select name="skintype_id" id="">
            <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      skintype
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">{{$skintype["name"]}}</a>
                    </div>
            </div>
         @foreach ($skintypes as $skintype)<!--左側が取ってきたい複数データ、右が１つずつ取ってくるもの-->
        <option value={{$skintype["id"]}}>{{$skintype["name"]}}</option>
         @endforeach
    </select>

    <select name="skintrouble_id" id="">
        @foreach ($skintroubles as $skintrouble)<!--左側が取ってきたい複数データ、右が１つずつ取ってくるもの-->
        <option value={{$skintrouble["id"]}}>{{$skintrouble["name"]}}</option>
        @endforeach
    </select>

    <select name="buy_place_id" id="">
         @foreach ($buy_places as $buy_place)<!--左側が取ってきたい複数データ、右が１つずつ取ってくるもの-->
         <option value={{$buy_place["id"]}}>{{$buy_place["name"]}}</option>
         @endforeach
    </select>


    <p>住所<textarea name="address" id="" cols="30" rows="10"></textarea></p>
    <p><input type="submit" value="送信"></p>
</form>

<!-- フォームに必要な属性
　action...入力されたデータ送信先
　method…getか postか -->
@endsection
