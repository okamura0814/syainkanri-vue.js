<header>
  <div class='navbar navbar-inverse navbar-fixed-top bg-success'>
    <div class='d-flex'>
      <div class='menu-trigger'>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div>
        <h1 class='navbar-brand'>社員管理画面</h1>
      </div>
    </div>
    <div class='d-flex'>
      <p class='name1'>{{session('yuuzaamei')}}</p>
      <a href='{{route('logout')}}'>
        <input class='btn btn-danger' type='submit' value='ログアウト' />
      </a>
    </div>
  </div>
</header>