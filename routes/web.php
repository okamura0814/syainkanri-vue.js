<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('syain/{any}',function() {
  return view('CompletionPage/kanrigamen_vue');
})->where('any', '.*');

// -------------------ログイン画面---------------------------------
// ログイン入力画面
Route::get('/syain',[
  'uses' => 'LoginController@index',
  'as' => 'index'
]);

// ログイン処理実行ルート
Route::post('/syain',[
  'uses' => 'LoginController@login',
  'as' => 'login'
]);

// -------------------社員管理画面---------------------------------
Route::group(["middleware" => "rogincheck.api"],function(){
  // 社員管理メイン画面（ログイン完了後はここに来る）
  Route::get('/syains',[
    'uses' => 'SyainsController@syainindex',
    'as' => 'syainindex'
  ]);

  Route::post('/kensakuRun',[
    'uses' => 'SyainsController@kensakuRun',
    'as' => 'kensakuRun'
  ]);

  Route::post('/tuikaRun',[
    'uses' => 'SyainsController@tuikaRun',
    'as' => 'tuikaRun'
  ]);

  Route::post('/henkouRun',[
    'uses' => 'SyainsController@henkouRun',
    'as' => 'henkouRun'
  ]);

  Route::post('/sakujoRun',[
    'uses' => 'SyainsController@sakujoRun',
    'as' => 'sakujoRun'
  ]);

});

Route::get('/logout',[
  'uses' => 'SyainsController@logout',
  'as' => 'logout'
]);