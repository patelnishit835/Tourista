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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="script.js"></script>
	<style>
		input[type=file]{
			color: transparent;
		}
		.user{
			width: 150px;
			height: 150px;
			border-radius: 100%;
		}
		img:hover{
		    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
		}
	</style>
	<script>
		function readURL(input)
		{
		    if (input.files && input.files[0]) 
		    {
		        var reader = new FileReader();
		        reader.onload = function(e) {
		            $('#userimg').attr('src', e.target.result);
		            $('#userimg').hide();
		            $('#userimg').fadeIn(650);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
	</script>
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
					<div style="background-color: rgba(224, 18, 29, 0.75)">
					<li class="nav-item active nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					</div>
					<li class="nav-item nav-prod">
						<a href="Guide.php" class="nav-link">GUIDE WITH US!</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="col-11 mx-auto">
		<div class="card mt-3 bg-light">
		<form method="POST" enctype="multipart/form-data" action="OTP.php">
		  <div class="card-header text-center">
		    <h4><strong> Guide SignUp </strong></h4>
		  </div>
		  <div class="card-body">
		  	<div class="row">
		  		<div class="container">
		  			<div>
		  				<a onclick="document.getElementById('imageUpload').click(); return false;">
		  					<img id="userimg" class="user hoverable" src="user.jpg">
		  				</a>
		  			</div>
		  			<div>
		  				<!-- <button class="btn btn-secondary" onclick="document.getElementById('imageUpload').click(); return false;">Upload Photo</button> -->
		  				<input type="file" name="profilepic" onchange="readURL(this);" id="imageUpload" style="visibility: hidden;" accept=".png, .jpg, .jpeg" required="true">
		  			</div>
		  		</div>		  		
		  	</div>
		  	<div class="row">	
	            <div class="md-form form-sm mb-4 col-md-6">
	                <i class="fa fa-user prefix"></i>
	                <input type="text" id="name" class="form-control form-control-sm validate" name="name" required>
	                <label data-error="wrong" data-success="right" for="name" style="margin-left: 3.1rem;">Enter Name</label>
	            </div>
		  		<div class="md-form form-sm mb-4 float-right col-md-6">
	                <i class="fa fa-envelope prefix"></i>
	                <input type="email" id="email" class="form-control form-control-sm validate" name="id" required>
	                <label data-error="wrong" data-success="right" for="email" style="margin-left: 3.1rem;">Enter Email</label>
	            </div>
	        </div>
	        <div class="row">
	            <div class="md-form form-sm mb-4 col-md-6">
	                <i class="fa fa-lock prefix"></i>
	                <input type="password" id="password" class="form-control form-control-sm validate" name="password" required minlength="6">
	                <label data-error="wrong" data-success="right" for="password" style="margin-left: 3.1rem;">Enter Password</label>
	            </div>
	            <div class="md-form form-sm mb-4 float-right col-md-6">
	                <i class="fa fa-credit-card prefix"></i>
	                <input type="tel" id="aadhar" class="form-control form-control-sm validate" name="aadhar" required minlength="12" maxlength="12">
	                <label data-error="wrong" data-success="right" for="aadhar" style="margin-left: 3.1rem;">Enter Aadhar</label>
	            </div>
	        </div>
	        <div class="row">
	            <div class="md-form form-sm mb-2 float-right col-md-6">
	                <i class="fa fa-map-marker prefix"></i>
	                <input type="text" id="work" class="form-control form-control-sm validate" name="work" required>
	                <label data-error="wrong" data-success="right" for="work" style="margin-left: 3.1rem;">Enter Place of Work</label>
	            </div>
            	<div class="md-form form-sm mb-4 col-md-6">
	            	<!-- Default switch -->
					<label class="bs-switch ml-3">
					  <input type="checkbox" name="avail">
					  <span class="slider round"></span>
					</label>  
	            	<label class="prefix mt-1" style="margin-left: 5.1rem">Availability</label>  
	            </div>	        	
		  </div>
		  <div class="row">
	            <div class="md-form form-sm mb-2 col-md-6">
	                <i class="fa fa-phone prefix"></i>
	                <input type="number" id="mobile" class="form-control form-control-sm validate" name="mobile" required>
	                <label data-error="wrong" data-success="right" for="mobile" style="margin-left: 3.1rem;">Enter Mobile Number</label>
	            </div>
	        </div>
	        <div>
	        	<input type="hidden" name="oldotp" value="<?php echo rand(10000000,99999999); ?>">
	        </div>
        	<div class="center text-center form-sm mt-1">
                <button class="btn btn-info btn-outline-black waves-effect ml-auto lighten-2" type="submit" name="submit" id="btn1">SignUp</button>
            </div>
		</div>
		</form>
	</div>

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