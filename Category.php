<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tourista</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.8/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>

    <style type="text/css">
	.backimg{
		background-image: url('Homepage Images/europe.jpg');
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
	<nav class="navbar navbar-expand-md navbar-dark sticky-top" id="navbar" style="background-color: rgba(32,32,32,0.75)">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<div>
					<li class="nav-item nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					</div>
					<li class="nav-item nav-prod" id="guide">
						<a href="Guide.php" class="nav-link">GUIDE WITH US!</a>
					</li>
					<li class="nav-item nav-prod">
						<a class="nav-link" data-toggle="modal" href="#modalLRForm" id="log">LOGIN/SIGN UP</a>
					</li>
					<li class="nav-item nav-prod" id="logout">
						<a class="nav-link" href="Logout.php">Logout</a>
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

					$c = $_GET['category'];
					$conn = mysqli_connect('localhost','root','','Tourista');
					$sql = "SELECT Name,Description,Image FROM Place WHERE Category = '$c' AND Parent_Place ='';";
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
							<h4 class='card-title' style='text-align:left;color:black;'>$name</h4>
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

					if(isset($_SESSION['login_user'])) {

						$name = $_SESSION['login_user'];

						echo "<script>

									var l = document.getElementById('log');
									l.innerHTML = '$name';
									l.href = '#';

									var s = document.getElementById('guide');
									s.innerHTML = '';
									s.style.visibility = 'hidden';

							  </script>";
					}
					else {
						echo "<script>
									var g = document.getElementById('logout');
									g.innerHTML = '';
									g.style.visibility = 'hidden';
							  </script>";
					}

					if(isset($_SESSION['guide_user_signup'])) {

						$name = $_SESSION['guide_user_signup'];
						echo "<script>

									var g = document.getElementById('log');
									g.innerHTML = $name;
									g.style.visibility = 'visible'; 

									var s = document.getElementById('logout');
									s.innerHTML = 'Logout';
									s.style.visibility = 'visible';

							  </script>";
					}
				?>
			</div>

			<br><br>	
			<!-- Footer -->
		<footer class="page-footer font-small" style="background-color: rgba(32,32,32,1)">

		    <!-- Footer Elements -->
		    <div class="container">

		      <!-- Grid row-->
		      <div class="row">

		        <!-- Grid column -->
		        <div class="col-md-12 py-5">
		          <div class="mb-5 flex-center">

		            <!-- Facebook -->
		            <a class="fb-ic">
		              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		            </a>
		            <!-- Twitter -->
		            <a class="tw-ic">
		              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		            </a>
		            <!-- Google +-->
		            <a class="gplus-ic">
		              <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		            </a>
		            <!--Linkedin -->
		            <a class="li-ic">
		              <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		            </a>
		            <!--Instagram-->
		            <a class="ins-ic">
		              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		            </a>
		            <!--Pinterest-->
		            <a class="pin-ic">
		              <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
		            </a>
		          </div>
		        </div>
		        <!-- Grid column -->

		      </div>

		      <!-- Grid row-->
		      <div class="row">
		      	<div class="para col-md-12 py-5" align="center" style="font-family: arial; font-size: 15px">
			    	<p>This project is developed by Nishit Patel, Akshay Kotak and Hardik Rathod as a part of their Third Year project.</p>
			    </div>
		      </div>

		    </div>
		    <!-- Footer Elements -->

		    <!-- Copyright -->
		    <div class="footer-copyright text-center py-3">© 2018 Copyright:
		      <a href="index.php"> Tourista.com</a>
		    </div>
		    <!-- Copyright -->

		  </footer>
		  <!-- Footer -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>

</body>
</html>