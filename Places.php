<!DOCTYPE html>
<html>
<head>
	<title>Tourista</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
	.navbar{
		background: none;
		background-color: none;
	}	
	.backimg{
		background-image: url('europe.jpg');
		background-repeat: repeat-x;
		background-attachment: fixed;
		background-position: center center;
		background-size: cover;
		position: relative;
		height: 650px;
		width: 100%;
		margin-bottom: 2rem;
	}
	.navbar .collapse ul li a.nav-link{
		color: #fff;
	}
	.navbar .navbar-brand{
		color: #fff;
		font-size: 2rem;
	}
	.heading{
		position: absolute;
		top: 40%;
		left: 40%;
		right: 60%;
		color: #fff;
		font-weight: bold;
	}
</style>

</head>
<body>
	<main class="backimg">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-faded">
				    <a class="navbar-brand" href="HomePage.html">Tourista</a>
				    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li class="nav-item">
					        <a class="nav-link" href="#">Guide with us!</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" data-toggle="modal" href="#modalLRForm">Login/SignUp</a>
					      </li>
					      <li class="nav-item">
					      	<a class="nav-link" href="#">ContactUs</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Hotels</a>
					      </li>
					    </ul>
				   </div>
			</nav>
			<div class="container">
				<h1 class="display-3 heading">Places</h1>
			</div>
		</div>
	</main>
	<div class="space">
		<section id="showcase">
			<div class="container">
				<!-- <div class="row">
					<div class="card-columns">
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
						<div class="card">
							<img src="goa1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Goa</h5>
								<button class="card-text btn-success">Know More</button>
							</div>
						</div>
					</div>
				</div> -->

				<?php
					$c = $_POST['cat'];
					$conn = mysqli_connect('localhost','root','','Tourista');
					$sql = "SELECT Description FROM Place";
				?>
			</div>
		</section>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>