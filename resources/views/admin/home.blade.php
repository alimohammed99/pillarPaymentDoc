<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KWSG </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
@include("admin.css")
  </head>
  <body>
@include("admin.navbar")
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include("admin.sidebar")
      <!-- Sidebar Navigation end-->
     @include("admin.body")
    </div>
    <!-- JavaScript files-->
@include("admin.script")
  </body>
</html>