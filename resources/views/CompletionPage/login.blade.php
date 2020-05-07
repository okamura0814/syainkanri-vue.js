<!DOCTYPE html>
<html lang='jp'>

 @include('layouts.head')

  <body>
    <div class='kensaku'>
      <div class='atama'>
        <h1>ログイン画面</h1>
        <p>社員番号とパスワードを入力してください。</p>
      </div>
      <div class='body1'>
        <form method='post' action="{{route('login')}}">
          <div class='inputs'>
            <div>
              <p>社員番号</p>
              <input type='text' name='id'>
            </div>
            <div>
              <p>パスワード</p>
              <input type='password' name='pasu'>
            </div>
          </div>
          <div class='btn'>
            <input type='submit' value='ログイン' />
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </body>
</html>