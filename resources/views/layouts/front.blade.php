<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>QDC Technologies</title>
    @section('css')
    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/app1.css')}}" rel="stylesheet">
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fullpage.min.css')}}" rel="stylesheet">

    @show
</head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top qdc">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">QDC Technologies </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active" data-menuanchor="home"><a href="#home">Home</a></li>
            <li data-menuanchor="about"><a href="#about">About Us</a></li>
            <li data-menuanchor="vision"><a href="#vision">Vision & Mission</a></li>
            <li data-menuanchor="products"><a href="#products">Our Client</a></li>
            <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>


     @yield('content')


    @section('js')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="{{asset('js/jquery.fullpage.min.js')}}"></script>
   <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
   <script src="{{asset('js/main1.js')}}"></script>
    @show
  </body>
</html>
