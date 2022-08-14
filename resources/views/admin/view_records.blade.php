<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KWSG </title>
    <meta name="description" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
       $(document).ready(function(){
          $('tr').each(function{
            var surcon = 0;
            $(this).find('magic').each(function(){
             var ahh = $(this).text();
             if(ahh.length !== 0){
               surcon+=parseFloat(ahh);
             }
            });
            $(this).find('#surcon').html('= '+surcon);
          });
       });
    </script>
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
        <h1 style="color:white; font-style:italic; font-family:broadway; font-size:32px; margin-top:30px; background-color:BROWN; padding:15px; margin-bottom:52px">ALL RECORDS</h1>

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
                <th style="color:tomato">TOTAL NO. OF PILLARS</th>
                <th style="color:tomato">SUM OF AMOUNT</th>
                <th style="color:tomato">SURCON</th>
                <th style="color:tomato">NAT NIS</th>
                <th style="color:tomato">SSCE</th>
                <th style="color:tomato">STNIS</th>
            </tr>
        </thead>
        <tbody>




@foreach($data as $data)


            <tr>
                <td style="color:white">{{$data->surcon_number}}</td>
                <td style="color:white">{{$data->name}}</td>
                <td style="color:white">{{$data->status}}</td>
                <td style="color:white">
                @php
                
                
               

                $show = DB::table('records')->where('surcon_number', $data->surcon_number)->get();

                $totalPillars = 0;

                foreach($show as $list){
                  $totalPillars = $totalPillars + $list->no_of_pillars;
                }

                echo $totalPillars;

                @endphp
               </td>


               <td style="color:white">
               @php
                
                
               

                $display = DB::table('records')->where('surcon_number', $data->surcon_number)->get();

                $totalAmount = 0;

                foreach($show as $list){
                  $totalAmount = $totalAmount + $list->amount;
                }

                echo $totalAmount;

                @endphp
               </td>
                <td class="magic" style="color:white">

                @php

               
                $ahh = ($totalAmount * 400)/900;
                echo $ahh;
               
                

              @endphp
              
              </td>
                <td style="color:white">{{($totalAmount * 200)/900}}</td>      
                <td style="color:white">{{($totalAmount * 200)/900}}</td>       
                <td style="color:white">{{($totalAmount * 100)/900}}</td>      
           
                

            </tr>


          
@endforeach

<tr>
<td style="color:white"><span style='display:none'>aaa</span></td>
<td style="color:white"><span style='display:none'>aaa</span></td>
<td style="color:white"><span style='display:none'>aaa</span></td>
<td style="color:white">{{$overallPillarsByEverybody}}</td>
<td style="color:white">{{$overallamountByEverybody}}</td>
<td id="surcon" style="color:white">
@php
$surconTotal = ($overallamountByEverybody * 400)/900;
echo $surconTotal;
@endphp
</td>
<td id="surcon" style="color:white">
@php
$natnisTotal = ($overallamountByEverybody * 200)/900;
echo $natnisTotal;
@endphp
</td>
<td id="surcon" style="color:white">
@php
$ssceTotal = ($overallamountByEverybody * 200)/900;
echo $ssceTotal;
@endphp
</td>
<td id="surcon" style="color:white">
@php
$stnisTotal = ($overallamountByEverybody * 100)/900;
echo $stnisTotal;
@endphp
</td>
</tr>
    
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