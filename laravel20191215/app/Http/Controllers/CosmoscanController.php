<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cosmoscan;
//新しく読みこんで使用する場合に書く

class CosmoscanController extends Controller
{
    public function getIndexPage() {

        $cosmoscans = Cosmoscan::all(); //指定したテーブル全てを表示
        //var_dump($cosmoscans);

          return view('cosmoscan.index',['cosmoscans'=>$cosmoscans]);//矢印左側がblade上で表記すると変数を呼び出す
       }

       public function getEntryForm() {
           return view('cosmoscan.new');
       }

       public function storeNewData(Request $request) {
           //formから受け取ったデータを必要に応じてデータベースを保存する

       $cosmoscan = new Cosmoscan();
       //phpmyadminのデータを新しく１行分取ってきます宣言
       $cosmoscan->title = $request->title;
       //->titleは入力フォームのname属性のtitleから取ってきます
       $cosmoscan->content = $request->content;
       $cosmoscan->save();
       //保存する宣言が必要。削除だとdestry();,更新だとupdate();

       return redirect('/cosmoscan/');
       //送信されました画面。。。（）内はurl(routeのweb.php参照)
       }


       public function updateNewData(Request $request) {
           //formから受け取ったデータを必要に応じてデータベースを更新

       $cosmoscan = Cosmoscan::find($request->id);
       //phpmyadminのデータを新しく１行分取ってきます宣言
       $cosmoscan->title = $request->title;
       //->titleは入力フォームのname属性のtitleから取ってきます
       $cosmoscan->content = $request->content;
       $cosmoscan->save();
       //保存する宣言が必要。削除だとdestry();,更新だとupdate();

       return redirect('/cosmoscan/');
       //送信されました画面。。。（）内はurl(routeのweb.php参照)

       }

       public function destroyNewData(Request $request) {
           //formから受け取ったデータを必要に応じてデータベースを更新


       Cosmoscan::destroy($request->id);
       //保存する宣言が必要。削除だとdestry();,更新だとupdate();

       return redirect('/cosmoscan/');
       //送信されました画面。。。（）内はurl(routeのweb.php参照)

       }
}
