<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Finding Restaurent | Login</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


		<style>
		  .bd-placeholder-img {
		    font-size: 1.125rem;
		    text-anchor: middle;
		    -webkit-user-select: none;
		    -moz-user-select: none;
		    -ms-user-select: none;
		    user-select: none;
		  }

		  @media (min-width: 768px) {
		    .bd-placeholder-img-lg {
		      font-size: 3.5rem;
		    }
		  }
		</style>
		<!-- Custom styles for this template -->
		<link href="signin.css" rel="stylesheet">
</head>
<body class="text-center" data-gr-c-s-loaded="true">
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Sign in</div>
	                @if(session()->has('message'))
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						{{ session()->get('message') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
					@endif
	                <div class="card-body">
	                    <form method="POST" action="{{ route('Login') }}">
	                        @csrf

	                        <div class="form-group row">
	                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail Address</label>

	                            <div class="col-md-6">
	                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" required autofocus>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

	                            <div class="col-md-6">
	                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required autofocus>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <div class="col-md-6 offset-md-4">
	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

	                                    <label class="form-check-label" for="remember">
	                                        {{ __('Remember Me') }}
	                                    </label>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary" style="width: 200px;">
	                                    {{ __('Login') }}
	                                </button>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-md-6 offset-md-4">If are new user click <a href="{{route('Register')}}"> Here </a></label>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

