<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    <title>Laravel Header</title>
  </head>
  <body>
    <div class="wrapper">
      
      @yield('content')

    </div>
  </body>
</html>
