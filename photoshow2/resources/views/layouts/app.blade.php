<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PhotoShow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
  </head>
  <body>
    @include('inc.topbar')
    <div class="row">
      @include('inc.message')
      @yield('content')
    </div>
  </body>
</html>
