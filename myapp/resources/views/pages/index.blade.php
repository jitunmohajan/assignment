<html>
<head>
	 <title>My project</title>
<link rel="stylesheet" href="{{asset('HomeBackend/style.css')}}">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

   <header>
   	       

   
   	    <div class="hero">
   	    	<h1>Explore this site</h1>
   	   	    <div class="button">
   	   	    	<a href="{{ URL::to('/login') }}" class="btn btn1">Sign in</a>
   	   	    	<a href="{{ URL::to('/register') }}" class="btn btn2">Sign up</a>
   	   	    </div>

   	    </div>
   </header>

</body>	



</html>
