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
     @include("admin.skin")









     <div class="container">
        
      <div class="container" align="center" style="text-align:center; margin-top:35px">
        <h1 style="color:white; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; background-color:BROWN; padding:15px; margin-bottom:52px">ALL SURVEYORS</h1>

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

  <div class="table-responsive">



  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="color:tomato">
                <th style="color:tomato">SURCON NUMBER</th>
                <th style="color:tomato">NAME</th>
                <th style="color:tomato">STATUS</th>
                <th style="color:tomato">EDIT</th>
                <th style="color:tomato">DELETE</th>
            </tr>
        </thead>
        <tbody>



@foreach($data as $data)


            <tr>
                <td style="color:white">{{$data->surcon_number}}</td>
                <td style="color:white">{{$data->name}}</td>
                <td style="color:white">{{$data->status}}</td>
                <td style="color:white"><a class="btn btn-info" href="{{url('edit_surveyors', $data->id)}}">Edit</a></td>
                <td style="color:white"><a class="btn btn-danger" href="{{url('delete_surveyors', $data->id)}}">Delete</a></td>

            </tr>

@endforeach
    
        </tbody>
    </table>
    </div>








      </div>
   
</div>

    </div>
    <!-- JavaScript files-->
@include("admin.script")
  </body>
</html>