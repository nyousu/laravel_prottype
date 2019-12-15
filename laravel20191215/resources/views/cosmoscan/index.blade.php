<!--/resources/views/cosmoscan/index.blade.php-->
@extends('layouts.common')
 @section('content')
 @foreach($cosmoscans as $data)

     {{$data["name"]}}
     {{$data["age"]}}
     {{$data["age"]}}
 <form action="{{route('cosmoscan.destroy',['id'=>$data["id"]])}} " method="POST">
       {{ csrf_field() }}
        <button>削除</button>
     </form>
 @endforeach
 <a href="{{route('cosmoscan.new')}} "  class=btn btn-primary>新規登録</a>
@endsection
