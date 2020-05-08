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
              <p>ユーザー名</p>
              <input type='text' name='yuuzaamei'>
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
        <form method="post" action="{{route('login')}}">
          <input type="hidden" name="yuuzaamei" value="okamura">
          <input type="hidden" name="pasu" value="pasu">
          <div class="btn">
            <input type="submit" value="簡単ログイン" />
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </body>
</html>