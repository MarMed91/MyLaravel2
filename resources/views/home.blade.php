<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel Header</title>
  </head>
  <body>
    <div class="wrapper">
      @include('elemBool.header')
      @include('elemBool.content')
      @include('elemBool.footer')
    </div>
  </body>
</html>
