<!--/resources/views/cosmoscan/recommend.blade.php-->
@extends('layouts.common')
 @section('content')
 @foreach($cosmoscanrecommends as $data)

     {{$data["product_image"]}}
     {{$data["product_name"]}}
     {{$data["product_quantity"]}}
     {{$data["product_price"]}}
     {{$data["product_place"]}}
     {{$data["product_effect"]}}
     {{$data["product_brand"]}}
     {{$data["product_jan"]}}

@endsection
