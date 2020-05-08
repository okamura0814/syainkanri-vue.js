<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Syain;

class SyainsController extends Controller
{
  // 社員一覧を返すAPI
  public function syainindex(){
    // ↓のコメントアウトしてあるコードはMiddlewareのrogincheck.phpが代わりに実行している(SyainsControllerのloguot以外すべて)

    // session_start();
    // セッションIDを変更する(ページごとに設置することでその都度変更できる)
    // session_regenerate_id(true);
    // セッションにloginデータが入っているか確認するif
    // if(session()->exists('login')){
      $syains = Syain::select('id','sei','mei','nenrei','yuuzaamei')->get();
      return $syains;
    // }else{
      // return view ('CompletionPage.login');
    // }

  }

  // 検索実行処理・結果API
  public function kensakuRun(Request $request){

    $post = $request->validate([
      'id' => 'required|integer'
    ]);

    $post_id = $post['id'];

    $syain = Syain::find($post_id);
    // var_dump($syain);die;

    return $syain;
  }

  // 社員追加実行API
  public function tuikaRun(Request $request){
    // バリデーション
    // バリデーションでチェックした内容はエラー配列に入って返す
    $params = $request->validate([
      'sei' => 'required|string|max:50',
      'mei' => 'required|string|max:50',
      'nenrei' => 'required|integer',
      'yuuzaamei' => 'required|max:50',
      'pasu' => 'required|max:50',
    ]);

    // create()メソッドを呼ぶことで、インスタンスの作成→属性の代入→データの保存を一気通貫でやってくれる
    Syain::create($params);
  }

  // 社員情報変更実行・実行結果を返すAPI
  public function henkouRun(Request $request){
    $post = $request->validate([
      'id' => 'required|integer',
      'pasu' => 'required|max:50',
    ]);

    $post_id = $post['id'];

    $syain = Syain::find($post_id);

    $syain->pasu = $post['pasu'];
    $syain->save();

    $syain = Syain::find($post_id);

    return $syain;
  }

  // 削除実行API
  public function sakujoRun(Request $request){

    $post = $request->validate([
      'id' => 'required|integer'
    ]);

    $post_id = $post['id'];

    $syain = Syain::find($post_id);

    $syain->delete();
  }

  // ログアウト機能
  public function logout(){
    session_start();
    // セッションの初期化
    session()->flush();

    if(session()->exists('login')){
      // Cookieも消す
      setcookie(session_name(),'',time()-42000,'/');
    }

    // if(isset($_COOKIE["login"])){
    //   setcookie('login','',time()-42000,'/');
    // }

    // これではセッションは消せるけどCookieは消せない
    session_destroy();

    return redirect()->route('index');
  }

}