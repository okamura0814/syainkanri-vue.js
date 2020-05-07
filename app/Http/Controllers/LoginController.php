<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Syain;

class LoginController extends Controller
{
  // public function __construct(){

  // }

  // ログイン入力画面
  public function index(){
    return view ('CompletionPage.login');
  }

  // ログイン確認処理
  public function login(Request $request){
    // バリデーション処理
    $post = $request->validate([
      'id' => 'required|integer',
      'pasu' => 'required'
    ]);

    $post_id = $post['id'];
    $post_pasu = $post['pasu'];

    $syain = Syain::where('id',$post_id)->where('pasu',$post_pasu)->first();
    // var_dump($syain);die;

    if($syain['yuuzaamei']){
      session_start();
      session()->put(['login'=> 1]);
      session()->put(['yuuzaamei'=> $syain['yuuzaamei']]);
      session()->put(['syainjouhou'=> $syain]);
      
      // vueでログインしてない場合に判別するために作ったクッキー（断念）
      setcookie("login", 1,+62000);

      // session_start();
      // $_SESSION['login'] = 1;
      // $_SESSION['name'] = $syainjyouhou['yuuzaamei'];
      // header("location:kanri.php?id=1");
      return redirect('syain/syains');
    }else{
      return view ('CompletionPage.login');
    }

  }

}
