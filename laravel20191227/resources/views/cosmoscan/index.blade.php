<!--/resources/views/cosmoscan/index.blade.php-->
@extends('layouts.common')
 @section('content')

 @foreach($cosmoscans as $data)

     {{$data["name"]}}
     {{$data["age"]}}
     {{$data["address"]}}
 <form action="{{route('cosmoscan.destroy',['id'=>$data["id"]])}} " method="POST">
       {{ csrf_field() }}
        <button>削除</button>
     </form>
 @endforeach

 <a href="{{route('cosmoscan.new')}} "  class=btn btn-primary>新規登録</a>
 <div class="card" style="width: 18rem;">
    <img src="https://growthseed.jp/wp-content/uploads/2016/12/peach-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection
