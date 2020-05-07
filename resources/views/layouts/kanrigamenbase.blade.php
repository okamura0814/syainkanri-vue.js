<!DOCTYPE html><html lang='jp'>
@include('layouts.head')
<body class='kanrigamen'>
@include('layouts.header')
<main>
  <div class='container-fluid'>
    <div class='row'>

    @include('layouts.said')

      <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
        <h2>社員管理</h2>

        @yield('maincontent')


      </div>
    </div>
  </div>
</main>
</body>
</html>