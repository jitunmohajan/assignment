<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sample Project</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	        <a class="navbar-brand" href="#">DEPT of CSE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			    <span class="navbar-toggler-icon"></span>
			</button>
	        
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav ml-auto">
	                <li class="nav-item active">
	                    <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="{{ URL::to('/about') }}">About</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="{{ URL::to('/service') }}">Services</a>
	                </li>
	            </ul>
	        </div>
	    </nav>
	    @yield('content')
    </div>

	<script src="{{ asset('js/jquery.min.js') }}" ></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>