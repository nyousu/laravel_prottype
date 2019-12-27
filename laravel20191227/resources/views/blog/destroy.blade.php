@extends('...layouts.layout')

@section('blog.destroy')
    削除<br>

    <form action='{{ route('ablog.destroy' }}' method='post'>
        {{ csrf_field() }}
            <input type='hidden' name='id' value='{{ $blog->id }}'><br>
            ユーザーID：{{ $blog->user_id }}<br>
            タイトル：{{ $article->title }}<br>
            内容：{{ $article->content }}<br>
            <input type='submit' value='削除'>
    </form>
@endsection