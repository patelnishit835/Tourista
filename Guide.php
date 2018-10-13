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
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

 	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="guide_styles.css">
	<script type="text/javascript" src="script.js"></script>

</head>
<body class="black-skin">

	<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: rgba(32,32,32,0.75)" id="navbar">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					<div style="background-color: rgba(224, 18, 29, 0.75)">
						<li class="nav-item nav-prod">
							<a href="Guide.php" class="nav-link">GUIDE WITH US!</a>
						</li>
				    </div>
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

	<!--Carousel Wrapper-->
	<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
	    <!--Indicators-->
	    <ol class="carousel-indicators">
	        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
	        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
	    </ol>
	    <!--/.Indicators-->
	    <!--Slides-->
	    <div class="carousel-inner" role="listbox">
	        <div class="carousel-item active">
	            <img class="d-block w-100" src="Guide/guide1.jpg" alt="First slide" height="550px">
	        </div>
	        <div class="carousel-item">
	            <img class="d-block w-100" src="Guide/guide2.jpg" alt="Second slide" height="550px">
	        </div>
	        <div class="carousel-item">
	            <img class="d-block w-100" src="Guide/guide3.jpg" alt="Third slide" height="550px">
	        </div>
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
	<!--/.Carousel Wrapper-->

	<h1 class="title-header" align="center">Make Money. Earn Respect. Secure Your Future.</h1>
	<h5 align="center" class="info">Apply now to become a Tourista guide-partner. Start earning more!</h5>

	<!-- Information -->

	<div class = "para container_para" style = "color : white;">
		<p>Lorem ipsum dolor sit amet, his ei quod senserit. Pro cu sumo bonorum torquatos, eu mazim habemus eum, ea quo dico definitionem. Duo ei graeci persius eligendi, ne pri lorem debet conceptam. Ad tota eligendi vix, mel ei altera lobortis, suavitate voluptaria ius ea. Vis ne quodsi utroque, in vix inermis ullamcorper.</p>
		<p>Ne noster causae eleifend cum, sed no homero nemore. Sea dicit soluta voluptua eu. Ancillae euripidis te nec, recusabo pertinacia complectitur duo et. Possim disputationi mei in. Partem vivendo partiendo an sit, quo solum nonumy ad, iriure oblique percipit et pro. His et copiosae principes urbanitas, eos adhuc vidisse ut, duo ne lorem alienum atomorum. Cu inermis evertitur sed, tollit graeco ea nam, qui nonumy singulis ut.
		</p>
		
	</div>

	<!-- FLIP CARDS -->

	<div class="row">
		<div class="column">
			<div class="flip-card" style="margin-left: 30px">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="Guide/guide1.jpg" alt="Avatar" style="width:300px;height:325px;">
			    </div>
			    <div class="flip-card-back">
			      <h1>John Doe</h1> 
			      <!-- <p>Architect & Engineer</p> 
			      <p>We love that guy</p> -->
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat.</p>
			    </div>
			  </div>
			</div>
		</div>

		<div class="column">
			<div class="flip-card" style="margin-left: 30px">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="Guide/guide2.jpg" alt="Avatar" style="width:300px;height:325px;">
			    </div>
			    <div class="flip-card-back">
			      <h1>John Doe</h1> 
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat.</p>
			    </div>
			  </div>
			</div>
		</div>

		<div class="column">
			<div class="flip-card" style="margin-left: 30px">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="Guide/guide3.jpg" alt="Avatar" style="width:300px;height:325px;">
			    </div>
			    <div class="flip-card-back">
			      <h1>John Doe</h1> 
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat.</p>
			    </div>
			  </div>
			</div>
		</div>

		<div class="column">
			<div class="flip-card" style="margin-left: 30px">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src="Guide/guide2.jpg" alt="Avatar" style="width:300px;height:325px;">
			    </div>
			    <div class="flip-card-back">
			      <h1>John Doe</h1> 
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat.</p>
			    </div>
			  </div>
			</div>
		</div>
	</div>

	<!-- Join Tourista -->
	<div class="joinus">
		<h2 align="center">Join Tourista Now for an Amazing career!</h2>
		<div align="center">
			<button class="btn col-md-4 danger-color-dark" data-toggle="modal" href="#signup">Join Us!</button>
		</div>
	</div>

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

	?>

	<script>
		
	</script>


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