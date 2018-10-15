<?php
	session_start();
  	if(isset($_SESSION['login_user']))
		{
		$username=$_SESSION['login_user'];
		echo   "<script>
				var l = document.getElementById('log');
				l.innerHTML = '$username';
				l.href = '#';

				var g = document.getElementById('guide');
				g.innerHTML = '';
				g.style.visibility = 'hidden';

			  	</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotels</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

 	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>

	<style type="text/css">
		div.stars {
		  width: 300px;
		  display: inline-block;
		}

		input.star { display: none; }

		label.star {
		  float: right;
		  padding: 7px;
		  font-size: 25px;
		  color: #444;
		  transition: all .2s;
		}

		input.star:checked ~ label.star:before {
		  content: '\f005';
		  color: #FD4;
		  transition: all .25s;
		}

		input.star-5:checked ~ label.star:before {
		  color: #FE7;
		  text-shadow: 0 0 20px #952;
		}

		input.star-1:checked ~ label.star:before { color: #F62; }

		label.star:hover { transform: rotate(-15deg) scale(1.3); }

		label.star:before {
		  content: '\f006';
		  font-family: FontAwesome;
		}
	</style>
</head>
<body>
	<?php
	    $conn = mysqli_connect("localhost","root","","Tourista");
	?>

	<nav class="navbar navbar-expand-md navbar-dark sticky-top" id="navbar" style="background-color: rgba(32,32,32,0.75)">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<div style="background-color: rgba(224, 18, 29, 0.75)">
					<li class="nav-item active nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					</div>
					<li class="nav-item nav-prod">
						<a href="Guide.php" class="nav-link">GUIDE WITH US!</a>
					</li>
					<li class="nav-item nav-prod">
						<a class="nav-link" data-toggle="modal" href="#modalLRForm" id="log">LOGIN/SIGN UP</a>
					</li>
					<li class="nav-item nav-prod">
						<a class="nav-link" href="Logout.php" id="logout">LOGOUT</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br>
	<div class="card bg-light col-11 mx-auto">
		<div class="card-header text-center">
			<h4><?php echo $_GET["hotel"]?></h4>
			<!-- <h3>Hotel Name</h3> -->
		</div>
		<div class="card-body">
			<div class="float-left col-md-6">
				<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
				    <!--Slides-->
				    <div class="carousel-inner" role="listbox">
<?php
				    	$name = $_GET['hotel'];
				    	$sql = "SELECT Image FROM Hotel WHERE Name = '$name';";
				    	$result = mysqli_query($conn,$sql);
				    	$num = mysqli_num_rows($result);
				    	$count = 0;
				    	while($row=mysqli_fetch_assoc($result))
				    	{
				    		$img = $row['Image'];
				    		$path = 'Description/Hotels/'.$img;
				    		if($count==0){
				    			echo "<div class='carousel-item active'>";
				    		}
				    		else{
				    			echo "<div class='carousel-item'>";
				    		}
?>
				    		<img class='d-block' src='<?php echo $path;?>' alt='First slide' height='400px'>
				        			</div>

<?php
				        	$count++;
				    	}
?>
				    </div>
				    <!--/.Slides-->
				    <!--Controls-->
				    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				        <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				        <span class="carousel-control-next-icon" aria-hidden="true"></span>
				        <span class="sr-only">Next</span>
				    </a>
				    <!--/.Controls-->
				</div>
			</div>
			<div class="float-right col-md-6">
				<br><h4 class="text-center">Overview</h4><br>
				<?php 
				$sql = "SELECT Details FROM Hotel WHERE Name = '$name';";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				$desc = $row[0];
				$desc = 'Description/Hotels/'.$desc;
				$line = '';
				if($fh = fopen($desc, 'r')){
					$line = file_get_contents($desc);
					fclose($fh);
				}
				echo "<p>$line</p>";
				?>
			</div>
		</div>
		<div class="row mt-4 mb-3 mx-auto">
				<div class="stars">
				  <form action="" method="POST">
				  	<button type="submit" class="btn btn-outline-success btn-md float-right">Rate</button>
				    <input class="star star-5" id="star-5" type="radio" name="star5">
				    <label class="star star-5" for="star-5"></label>
				    <input class="star star-4" id="star-4" type="radio" name="star4">
				    <label class="star star-4" for="star-4"></label>
				    <input class="star star-3" id="star-3" type="radio" name="star3">
				    <label class="star star-3" for="star-3"></label>
				    <input class="star star-2" id="star-2" type="radio" name="star2">
				    <label class="star star-2" for="star-2"></label>
				    <input class="star star-1" id="star-1" type="radio" name="star1">
				    <label class="star star-1" for="star-1"></label>
				  </form>
				</div>
				<?php
					$rating = 0;
					if(isset($_POST['star5'])){
						$rating = 5;
					}
					elseif (isset($_POST['star4'])) {
						$rating = 4;
					}
					elseif (isset($_POST['star3'])) {
						$rating = 3;
					}
					elseif (isset($_POST['star2'])) {
						$rating = 2;
					}
					elseif (isset($_POST['star1'])) {
						$rating = 1;
					}
					if($rating!=0){
						$sql = "SELECT UserID FROM User WHERE Name = '$username';";
						$result = mysqli_query($conn,$sql);
						$userid = mysqli_fetch_array($result);
						$sql = "SELECT HotelID FROM Hotel WHERE Name = '$name';";
						$result = mysqli_query($conn,$sql);
						$hotelid = mysqli_fetch_array($result);
						$sql = "INSERT INTO hRates VALUES('$userid[0]','$hotelid[0]','$rating');";
						mysqli_query($conn,$sql);
					}					
				?>
		</div>
	</div>

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