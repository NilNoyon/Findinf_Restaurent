
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Finding</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">Restaurant Finding</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{route('Login')}}">Sign in</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{route('Register')}}">Sign up</a>
			      </li>
			    </ul>
			    <!-- <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form> -->
  			</div>
	</nav>

<!-- //carousel -->


	<div class="bd-example">
  	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		      <div class="carousel-item active">
		        <img src="{{URL::to('/images/R1jpg.jpg')}}" class="d-block w-100" alt="R1">
		        <div class="carousel-caption d-none d-md-block">
		          <h5>First slide label</h5>
		          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		        </div>
		      </div>
		      <div class="carousel-item">
		        <img src="{{URL::to('/images/slide2.jpg')}}" class="d-block w-100" alt="slide2">
		        <div class="carousel-caption d-none d-md-block">
		          <h5>Second slide label</h5>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		        </div>
		      </div>
		      <div class="carousel-item">
		        <img src="{{URL::to('/images/s3.jpg')}}" alt="images" class="d-block w-100" alt="s3">
		        <div class="carousel-caption d-none d-md-block">
		          <h5>Third slide label</h5>
		          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
		        </div>
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
	</div>
<!-- jvmbutton -->

	<div class="jumbotron">
		<span class="d-block p-2 bg-dark text-white">
		  <h1 class="display-4">You Hungry?</h1>
		  <p class="lead">Discover the best restaurants quickly and easily with Our Foodie Community.</p>
		  <hr class="my-4">
		  <p>Choose from more than <b>10,000</b> restaurants, check out what ofer is going on in your favorite restaurants, get inspired and make a super easy reservation.</p>
		  <p>BTW: You can also find special <strong>offers and deals.</strong></p>
		  <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Let's Start</a> -->
		  <!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Let's Eat!!!!!
			</button>
		</span>

<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Join Us</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				       Join and get access to 10,000 restaurants...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-success" data-dismiss="modal">Sign In</button>
				        <button type="button" class="btn btn-primary">Sign Up</button>
				      </div>
				    </div>
				  </div>
				</div>
	
	</div>


<!--Cards-->
	<div class="card-deck">
		@if(isset($restaurents))
			@foreach($restaurents as $restaurent)
			  <div class="card">
				  <span class="border border-primary">
				    <img src="{{URL::to('/restaurent_images/'.$restaurent->image)}}" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">{{ $restaurent->name }}</h5>
				      <h5 class="card-sub-title">{{ $restaurent->address }}</h5>
				    </div>
				    <div class="card-footer">
				      <a href="{{route('Menus',['restaurent_id'=>$restaurent->id])}}" class="btn btn-primary">Click to see menu</a>
				    </div>
				  </span>
			  </div>
	  		@endforeach
		@endif
	</div>
<!-- bootstrapjs -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>