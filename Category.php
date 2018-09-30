<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tourista</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.8/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>

    <style type="text/css">
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
		<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="opacity:1;color:white;" id="navbar">
			<div class="container-fluid">
				<a href="index.php" class="navbar-brand">Tourista</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item nav-prod">
							<a href="index.php" class="nav-link">HOME</a>
						</li>
						<li class="nav-item nav-prod">
							<a href="guidelogin.php" class="nav-link">GUIDE WITH US!</a>
						</li>
						<li class="nav-item nav-prod">
							<a class="nav-link" data-toggle="modal" href="#modalLRForm" id="log">LOGIN/SIGN UP</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main class="backimg">
			<div class="container">
				<h1 class="display-3 heading">Places</h1>
			</div>
		</main>
			<div class="container">

				<?php

					if(isset($_SESSION['login_user'])){
							$s=$_SESSION['login_user'];
							echo "<script>
							var l = document.getElementById('log');
							l.innerHTML = '$s';
							l.href = '#';
						  	</script>";
					}

					$c = $_POST['cat'];
					$conn = mysqli_connect('localhost','root','','Tourista');
					$sql = "SELECT Name,Description,Image FROM Place WHERE Category = '$c'";
					if($result=mysqli_query($conn,$sql)){
						echo "<html>
						<head>
							<style type='text/css'>
								@media (min-width: 576px) {
								    .card-columns {
								        column-count: 1;
								    }
								}

								@media (min-width: 768px) {
								    .card-columns {
								        column-count: 3;
								    }
								}

								@media (min-width: 992px) {
								    .card-columns {
								        column-count: 3;
								    }
								}

								@media (min-width: 1200px) {
								    .card-columns {
								        column-count: 3;
								    }
								}
							</style>
						</head>
						<body>
						<div class='row'>
						<div class='card-columns'>
						";
						$count=0;

						while ($row=mysqli_fetch_assoc($result)) {
							$name = $row['Name'];
							$img = $row['Image'];
							$desc = $row['Description'];
							$count++;
							$line = '';
							if($fh = fopen($desc, 'r')){
								$line = file_get_contents($desc);
								$line = explode("\n", $line,2);
								$line[0] = trim($line[0]);
								fclose($fh);
							}

							echo "
							<div class='card heartBeat hoverable'>

							<!-- Card image -->
							<div class='view overlay'>
							<img class='card-img-top' src='$img'>
							<a>
							  <div class='mask rgba-white-slight'></div>
							</a>
							</div>

							<!-- Card content -->
							<div class='card-body'>

							<!-- Title -->
							<h4 class='card-title' style='text-align:left;'>$name</h4>
							<hr>
							<!-- Text -->
							<p class='card-text' style='color:black;text-align:left;'>$line[0]</p>
							<!-- Link --> 
							<a href='Places.php?place=$name' class='black-text d-flex justify-content-end' type='hidden'><h5>Know more <i class='fa fa-angle-double-right'></i></h5></a>

							</div>

							</div>
							";

							if($count%3==0){
								echo "</div></div>
									  <div class='row'>
									  <div class='card-columns'>";
							}
						}
						echo "</div></div></body></html>";
					}
					else{
						mysqli_error($conn);
					}
				?>
			</div>

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.8/js/mdb.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
</body>
</html>