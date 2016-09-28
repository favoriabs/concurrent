<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/OnePage/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/OnePage/css/font-awesome.min.css"/>
    <link href="/OnePage/css/animate.min.css" rel="stylesheet"/> 
    <link href="/OnePage/css/animate.css" rel="stylesheet" />
	<link href="/OnePage/css/prettyPhoto.css" rel="stylesheet"/> 
	<link href="/OnePage/css/style.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="{{{asset('Convert.png')}}}"/>


	
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  @yield('content')


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/OnePage/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/OnePage/js/bootstrap.min.js"></script>
	<script src="/OnePage/js/jquery.prettyPhoto.js"></script>
    <script src="/OnePage/js/jquery.isotope.min.js"></script> 
	<script src="/OnePage/js/wow.min.js"></script>
	<script src="/OnePage/js/jquery.easing.min.js"></script>	
	<script src="/OnePage/js/main.js"></script>
  </body>
</html>