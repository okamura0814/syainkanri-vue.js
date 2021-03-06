<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// 「モデル」とは、テーブルの内容を定義したクラスです。モデルをテーブルに紐づけることで、テーブル操作が簡単にできます。

// テーブルのカラム（フィールド）を、プロパティとして持たせているので、テーブルをインスタントして扱うことができます。

// SQLをゴリゴリ書かなくても、レコードの抽出・挿入・更新・削除が簡単にできるのです。

// 1つのテーブルにつき、1つのモデルが紐づきます。Laravelにはテーブルとモデルを紐づける命名規則があります。

// ポイント
// Laravelでは、「テーブル」と「モデル」を自動でマッピングするための命名規則があります。

// モデル名＝単数形／テーブル名＝複数形で命名すると、自動でマッピングされます。

// （例）
// モデル名＝Book
// テーブル名＝books
// この命名規則を破ったネーミングにする場合、特別な記述をするとマッピングできます

// モデル生成コマンド
// $ php artisan make:model Post
class Syain extends Model
{
  // SQLのタイムスタンプカラムを使用しない場合に設定する
  public $timestamps = false;
  // fillableはモデルを利用してデータを作成する時に、複数代入を許可するための設定
  protected $fillable = [
    'sei',
    'mei',
    'nenrei',
    'yuuzaamei',
    'pasu',
  ];
}
