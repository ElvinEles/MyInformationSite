<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> @yield('title') </title>
  <link rel="icon" href="{{asset('images/titleimage.jpg')}}" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keyword" content="">
  <!-- styles -->
  @include('frontend/headerfooter/frontendheader')
  <!-- styles -->

</head>

<body>
  <header>

    @php
        $mainpagelogo=DB::table("main_page")->where('main_page_id',1)->first();
       
    @endphp

    <!-- start top -->
    <div style="background-color: #2F3040" class="navbar navbar-fixed-top default">
      <div  class="navbar-inner">
        <div  class="container">
          <div  class="navigation">
           @include('frontend/headerfooter/frontendmenubar')
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <!-- end top -->
  </header>

  <!--CONTAINER-->
   
  @yield('container')

   <!--CONTAINER-->

  



  @include('frontend/headerfooter/frontendfooter')

 

</body>

</html>
