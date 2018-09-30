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
<body class="black-skin">

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
					<li class="nav-item nav-prod">
						<a class="nav-link" data-toggle="modal" href="#signin" id="log">LOGIN</a>
					</li>
					<li class="nav-item nav-prod">
						<a class="nav-link" data-toggle="modal" href="#signup" id="up">SIGN UP</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content cascading-modal" role="document">
	  	        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
					<form action="GuideUserProfile.php" method="POST">
						<div class="modal-body mb-1">
				            <div class="md-form form-sm mb-5">
				                <i class="fa fa-envelope prefix"></i>
				                <input type="email" id="modalLRInput13" class="form-control form-control-sm validate" name="email2" required>
				                <label data-error="wrong" data-success="right" for="modalLRInput13">Email</label>
				            </div>

				            <div class="md-form form-sm mb-5">
				                <i class="fa fa-lock prefix"></i>
				                <input type="password" id="modalLRInput15" class="form-control form-control-sm validate" minlength="6" required="true" name="pass2">
				                <label data-error="wrong" data-success="right" for="modalLRInput15">Password</label>
				            </div>

				            <div class="text-center form-sm mt-2">
					            <button class="btn btn-info btn-outline-black lighten-1 waves-effect ml-auto" type="submit" name="submit">SignIn</button>
					        </div>
			            </div>
			            <div class="modal-footer">    
				       		<button type="button" class="btn btn-outline-black waves-effect ml-auto" data-dismiss="modal">Close</button>
				        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content cascading-modal" role="document">
	  	        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
					<form action="GuideUserProfile.php" method="POST">
						<div class="modal-body mb-1">
				        	<div class="md-form form-sm mb-5">
				                <i class="fa fa-user prefix"></i>
				                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="name" required>
				                <label data-error="wrong" data-success="right" for="modalLRInput12">Name</label>
				            </div>

				            <div class="md-form form-sm mb-5">
				                <i class="fa fa-envelope prefix"></i>
				                <input type="email" id="modalLRInput13" class="form-control form-control-sm validate" name="email" required>
				                <label data-error="wrong" data-success="right" for="modalLRInput13">Email</label>
				            </div>

				            <div class="md-form form-sm mb-5">
				                <i class="fa fa-phone prefix"></i>
				                <input type="text" id="modalLRInput14" class="form-control form-control-sm validate" pattern="[0-9]{10}" name="mobile" required>
				                <label data-error="wrong" data-success="right" for="modalLRInput14">Phone Number</label>
				            </div>

				            <div class="md-form form-sm mb-5">
				                <i class="fa fa-lock prefix"></i>
				                <input type="password" id="modalLRInput15" class="form-control form-control-sm validate" minlength="6" required="true" name="pass">
				                <label data-error="wrong" data-success="right" for="modalLRInput15">Password</label>
				            </div>

				           	<div class="md-form form-sm mb-5">
				                <i class="fa fa-address-card prefix"></i>
				                <input type="text" id="modalLRInput16" class="form-control form-control-sm validate" size="12" required="true" name="aadhar">
				                <label data-error="wrong" data-success="right" for="modalLRInput16">Aadhar Number</label>
				            </div>
				            <div class="text-center form-sm mt-2">
					            <button class="btn btn-info btn-outline-black lighten-1 waves-effect ml-auto" type="submit" name="submit2">Sign Up</button>
					        </div>
			            </div>
			            <div class="modal-footer">    
				       		<button type="button" class="btn btn-outline-black waves-effect ml-auto" data-dismiss="modal">Close</button>
				        </div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- PHP CODE -->

	<?php

		if(isset($_SESSION['guide_user_signup']))
		{
			$name = $_SESSION['guide_user_signup'];
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

	<script>
		
	</script>


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