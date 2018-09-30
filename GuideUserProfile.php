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

</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-faded" style="opacity:1" id="navbar">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					<li class="d-lg-none nav-item nav-prod">
						<a href="index.php" class="nav-link">Profile</a>
					</li>
					<li class="d-lg-none nav-item nav-prod">
						<a href="index.php" class="nav-link">Setting</a>
					</li>
					<li class="d-lg-none nav-item nav-prod">
						<a href="index.php" class="nav-link">Log Out</a>
					</li>
				</ul>
				<div class="d-none d-lg-block dropdown">
				  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Name  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="#">Profile</a>
				    <a class="dropdown-item" href="#">Setting</a>
				    <div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="Logout.php">Log Out</a>
				  </div>
				</div>
			</div>
		</div>
	</nav>


	


	<!-- PHP CODE -->

	<?php
		
		// $conn = mysqli_connect("localhost","root","","Tourista");
		if(isset($_SESSION['guide_user_signup']))
		{
			$name = $_SESSION['guide_user_signup'];
			echo "Hardik";	
		}
		

		$conn = mysqli_connect("localhost","root","","Tourista");
		if(isset($_POST['submit']))
		{
			$email = $_POST['email2'];
			$pass = $_POST['pass2'];
			$sql = "Select * from Guide where EmailID = '$email' and Password = '$pass';";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==1)
			{
				$row = mysqli_fetch_assoc($result);
				$username = $row['Name'];
				$_SESSION['guide_user_signup']=$username;
				echo "<script>
						var l = document.getElementById('up');
						l.innerHTML = '$username';
						l.href = '#';
						myFunction();
						function myFunction() {
						    var x = document.getElementById('log');
						    if (x.style.display === 'none') {
						        x.style.display = 'block';
						    } else {
						        x.style.display = 'none';
						    }
						}
					  </script>";
			}

		}

		if(isset($_POST['submit2'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$pass = $_POST['pass'];
			$aadhar = $_POST['aadhar'];
			$sql = "INSERT INTO Guide VALUES('$name','','$email','$pass','$aadhar','/xyz','1','Goa','1');";
			if(mysqli_query($conn,$sql)) {
				$_SESSION['guide_user_signup']=$name;
				echo "<script>
						var l = document.getElementById('up');
						l.innerHTML = '$name';
						l.href = '#';
						myFunction();
						function myFunction() {
						    var x = document.getElementById('log');
						    if (x.style.display === 'none') {
						        x.style.display = 'block';
						    } else {
						        x.style.display = 'none';
						    }
						}
					  </script>";
			}
			else {
				echo mysqli_error($conn);
				
			}
		}
	?>


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