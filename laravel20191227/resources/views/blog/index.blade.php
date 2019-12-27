<!--/resources/views/blog/index.blade.php-->
@foreach($blogs as $data)

     {{$data["title"]}}
     {{$data["content"]}}
@endforeach