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
        <h1 style="color:white; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; background-color:BROWN; padding:15px; margin-bottom:52px">ADD RECORDS</h1>

        <br>







        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" type="button" data-dismiss="alert">x</button>
            {{session()->get('message')}}
          </div>
        @endif


<div style="border:3px solid red; padding:10px; border-radius:150px 10px 150px 10px">

        <h1 style="color:green">Upload an excel sheet</h1> <br>


        <form action="{{route('import')}}" method="post" enctype="multipart/form-data">

          @csrf

          <input type="file" name="file" accept=".csv" id=""> <br><br>
          <button class="btn btn-success">Import Data</button>
          <!-- <a href="" class="btn btn-info">Export Data</a> <br><br> -->

        </form>
  </div> <br><br><br>

      <form style="" class="form" action="{{url('upload_records')}}" method="post" enctype="multipart/form-data">
          @csrf

 
       <div class="form-group">
        <label for="name">DATE</label>
          <input style="color:tomato" class="form-control" type="text" name="date" placeholder="Enter Date" required>
        </div>

       <div class="form-group">
        <label for="location">QUARTER</label>
          <input style="color:tomato" class="form-control" type="text" name="quarter" placeholder="Enter Quarter" required>
        </div>

        <div class="form-group">
        <label for="location">STARTING POINT</label>
          <input style="color:tomato" class="form-control" type="text" name="starting_point" placeholder="Enter Starting Point" required>
        </div>

        <div class="form-group">
        <label for="location">END POINT</label>
          <input style="color:tomato" class="form-control" type="text" name="end_point" placeholder="Enter End Point" required>
        </div>

        <div class="form-group">
        <label for="location">SURCON NUMBER</label>
          <input style="color:tomato" class="form-control" type="number" name="surcon_number" placeholder="Enter Surveyor's Surcon Number" required>
        </div>

        <div class="form-group">
        <label for="location">NAME</label>
          <input style="color:tomato" class="form-control" type="text" name="name" placeholder="Enter Surveyor's Name" required>
        </div>


        <div class="form-group">
        <label for="location">STATUS</label>
          <input style="color:tomato" class="form-control" type="text" name="status" placeholder="Enter Surveyor's Status" required>
        </div>

        <div class="form-group">
        <label for="location">NUMBER OF PILLARS</label>
          <input style="color:tomato" class="form-control" type="number" name="no_of_pillars" placeholder="Number of Pillars" required>
        </div>

        <div class="form-group">
        <label for="location">PLAN NUMBER</label>
          <input style="color:tomato" class="form-control" type="text" name="plan_number" placeholder="Enter Plan Number" required>
        </div>

        <div class="form-group">
        <label for="location">LOCATION</label>
          <input style="color:tomato" class="form-control" type="text" name="location" placeholder="Enter Location" required>
        </div>

        <div class="form-group">
        <label for="location">LGA</label>
          <input style="color:tomato" class="form-control" type="text" name="lga" placeholder="Enter LGA" required>
        </div>

        <div class="form-group">
        <label for="location">AMOUNT</label>
          <input style="color:tomato" class="form-control" type="text" name="amount" placeholder="Enter Amount" required>
        </div>

        <div class="form-group">
          <label for="plan">TYPE</label>
          <input style="color:tomato;" class="form-control" type="text" placeholder="Normal or Special" name="type" required>
        </div>


        <div class="form-group">
        <label for="payment">PAYMENT MODE</label>
          <input style="color:tomato" class="form-control" type="text" name="payment_mode" placeholder="Teller or Transfer" required>
        </div>


       
        

    


       <div class="form-group">
          <input style="background-color:green" type="submit" class="btn btn-success" value="Submit">
        </div>


        </form>













      </div>
   
</div>

    </div>
    <!-- JavaScript files-->
@include("admin.script")
  </body>
</html>