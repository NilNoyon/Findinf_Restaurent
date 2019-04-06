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
			      <li class="nav-item">
			        <a class="nav-link" href="{{route('User_Dashboard')}}">Dashboard</a>
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

<!--Cards-->
	<div class="card-deck">
		@if(isset($menus))
			@foreach($menus as $menu)
			  <div class="card">
				  <span class="border border-primary">
				    <img src="{{URL::to('/item_images/'.$menu->image)}}" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">{{ $menu->item_name }}</h5>
				      <h5 class="card-sub-title">{{ $menu->price }}</h5>
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