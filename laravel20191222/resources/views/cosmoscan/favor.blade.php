<!--/resources/views/cosmoscan/recommend.blade.php-->
@extends('layouts.common')
 @section('content')
 @foreach($cosmoscanrecommends as $data)

     {{$data["product_favor5"]}}
     {{$data["product_favor4"]}}
     {{$data["product_favor3"]}}
     {{$data["product_favor2"]}}
     {{$data["product_favor1"]}}
     {{$data["product_favor0"]}}

@endsection
