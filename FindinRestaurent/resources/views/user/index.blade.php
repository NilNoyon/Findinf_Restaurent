<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Finding</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="{{route('Restaurent_owner_Dashboard')}}">Restaurant Finding</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="{{route('Restaurent_owner_Dashboard')}}">Dashboard<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{route('Menu')}}">Menu</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="{{ route('Logout')}}">Logout</a>
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
<!-- jvmbutton -->
	@if(session()->has('message'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		{{ session()->get('message') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
	@endif

	@if(session()->has('success_message'))
		<div class="alert alert-success">
		  <strong>Success! your item added into your menu</strong>{{ session()->get('message') }}
		</div>
	@endif
	<div class="jumbotron">
		<span class="d-block p-2 bg-dark text-white">
			<img src="{{URL::to('/restaurent_images/'.$data->image)}}" width="1400" height="400">
		  <!-- <h1 class="display-4">You Hungry?</h1>
		  <p class="lead">Discover the best restaurants quickly and easily with Our Foodie Community.</p>
		  <hr class="my-4">
		  <p>Choose from more than <b>10,000</b> restaurants, check out what ofer is going on in your favorite restaurants, get inspired and make a super easy reservation.</p>
		  <p>BTW: You can also find special <strong>offers and deals.</strong></p>
		  <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Let's Start</a> -->
		  <!-- Button trigger modal -->
		  <h1 class="display-4">We are {{ $data->name }} !!</h1>
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
  <div class="card" align="center">
  	<div class="panel panel-default">
		<div class="panel-heading"><h3 class="panel-title"><strong>Add Item to your Menu</strong></h3></div>
		<div class="panel-body">
			<form method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="itemName">Item Name </label>
					<input type="text" class="form-control" id="item_name" placeholder="Enter Item Name" name="name" required>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" placeholder="Enter your item price" name="price" required>
					<input type="hidden" name="restaurent_id" value="{{ $data->id }}">
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" class="form-control" id="image" name="image" required>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
  </div>
  
</div>
<!-- bootstrapjs -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>