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
    <base href="/public">
@include("admin.css")

  </head>
  <body>
@include("admin.navbar")
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include("admin.sidebar")
      <!-- Sidebar Navigation end-->
     @include("admin.skin")









     <div class="container">
        
      <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:white; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; background-color:BROWN; padding:15px; margin-bottom:52px">EDIT SURVEYOR</h1>

        <br>







        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif

<!-- <div style="border:3px solid red; padding:10px; border-radius:150px 10px 150px 10px">
        <h1>Upload an excel sheet</h1> <br>


        <form action="" method="post" enctype="multipart/form-data">

          @csrf

          <input type="file" name="file" accept=".csv" id=""> <br> <br>
          <button class="btn btn-success">Import Data</button>
          <a href="" class="btn btn-info">Export Data</a> <br><br>

        </form>
  </div> <br><br><br> -->

      <form style="" class="form" action="{{url('update_surveyors', $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf

        <div class="form-group">
          <label for="plan">SURCON NUMBER</label>
          <input style="color:tomato;" class="form-control" type="text" value="{{$data->surcon_number}}" name="surcon" required>
        </div>

       <div class="form-group">
        <label for="name">NAME</label>
          <input style="color:tomato" class="form-control" type="text" name="name" value="{{$data->name}}" required>
        </div>

       <div class="form-group">
        <label for="location">STATUS</label>
          <input style="color:tomato" class="form-control" type="text" name="status" value="{{$data->status}}" required>
        </div>

    


       <div class="form-group">
          <input style="background-color:green" type="submit" class="btn btn-success" value="Update">
        </div>


        </form>













      </div>
   
</div>

    </div>
    <!-- JavaScript files-->
@include("admin.script")
  </body>
</html>