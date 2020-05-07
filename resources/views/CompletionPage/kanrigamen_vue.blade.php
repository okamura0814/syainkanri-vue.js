<!DOCTYPE html><html lang='jp'>
@include('layouts.head')
<body class='kanrigamen'>
@include('layouts.header')
<main>
  <div class='container-fluid'>
    <div id='app' class='row'>

      <div class='clearfix'></div>
      {{-- app.jsで登録されたvueコンポーネントのタグ --}}
      <said-component></said-component>

      <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
        <h2>社員管理</h2>

        {{-- app.jsで登録されたvueコンポーネントのタグ --}}
        <router-view></router-view>

      </div>
    </div>
  </div>
</main>
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>