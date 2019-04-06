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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
	    	@if(isset($message))
	    		$message
	    	@endif
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Sign Up</div>

	                <div class="card-body">
	                    <form method="POST">
	                        @csrf
	                        <div class="form-group row">
	                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

	                            <div class="col-md-6">
	                                <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name" required autofocus>
	                            </div>
	                        </div>
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
	                            <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

	                            <div class="col-md-6">
	                                <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Enter your password" required autofocus>
	                                <span id='message'></span>
	                            </div>
	                        </div>

	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary" style="width: 200px;">
	                                    {{ __('Register') }}
	                                </button>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-md-6 offset-md-4">If are old user click <a href="{{route('Login')}}"> Here </a></label>
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
	<script type="text/javascript">
		$('#password, #confirm_password').on('keyup', function () {
		  if ($('#password').val() == $('#confirm_password').val()) {
		    $('#message').html('Matching').css('color', 'green');
		  } else 
		    $('#message').html('Not Matching').css('color', 'red');
		});
	</script>
</body>
</html>

