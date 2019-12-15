<?php
/*app/Http/Controllers/BlogController.php*/ 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//postは処理　Request= Formから送られてきたデータのこと

use App\Blog;
//新しく読みこんで使用する場合に書く

class BlogController extends Controller
{
    public function getIndexPage() {

     $blogs = Blog::all(); //指定したテーブル全てを表示
     $blogs = Blog::find(1); //指定したテーブルのidから一部を表示

       return view('blog.index',['blogs'=>$blogs]);//矢印左側がblade上で表記すると変数を呼び出す
    }

    public function getEntryForm() {
        return view('blog.new');
    }

    public function storeNewData(Request $request) {
        //formから受け取ったデータを必要に応じてデータベースを保存する

    $blog = new Blog();
    //phpmyadminのデータを新しく１行分取ってきます宣言
    $blog->title = $request->title;
    //->titleは入力フォームのname属性のtitleから取ってきます
    $blog->content = $request->content;
    $blog->save();
    //保存する宣言が必要。削除だとdestry();,更新だとupdate();
    
    return redirect('/blog/');
    //送信されました画面。。。（）内はurl(routeのweb.php参照)
    }
    

    public function updateNewData(Request $request) {
        //formから受け取ったデータを必要に応じてデータベースを更新

    $blog = Blog::find($request->id);
    //phpmyadminのデータを新しく１行分取ってきます宣言
    $blog->title = $request->title;
    //->titleは入力フォームのname属性のtitleから取ってきます
    $blog->content = $request->content;
    $blog->save();
    //保存する宣言が必要。削除だとdestry();,更新だとupdate();
    
    return redirect('/blog/');
    //送信されました画面。。。（）内はurl(routeのweb.php参照)

    }

    public function destroyNewData(Request $request) {
        //formから受け取ったデータを必要に応じてデータベースを更新

    $blog = Blog::find($request->id);
    //phpmyadminのデータを新しく１行分取ってきます宣言
    $blog->title = $request->title;
    //->titleは入力フォームのname属性のtitleから取ってきます
    $blog->content = $request->content;
    $blog->destroy();
    //保存する宣言が必要。削除だとdestry();,更新だとupdate();
    
    return redirect('/blog/');
    //送信されました画面。。。（）内はurl(routeのweb.php参照)

    }


}
