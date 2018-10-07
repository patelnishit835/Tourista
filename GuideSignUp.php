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
		  				<input type="file" onchange="readURL(this);" id="imageUpload" style="visibility: hidden;" accept=".png, .jpg, .jpeg"/>
		  			</div>
		  		</div>		  		
		  	</div>
		  	<div class="row">	
	            <div class="md-form form-sm mb-4">
	                <i class="fa fa-envelope prefix"></i>
	                <input type="email" id="name" class="form-control form-control-sm validate" name="name" required>
	                <label data-error="wrong" data-success="right" for="name">Enter Name</label>
	            </div>
		  		<div class="md-form form-sm mb-4 float-right">
	                <i class="fa fa-envelope prefix"></i>
	                <input type="email" id="email" class="form-control form-control-sm validate" name="id" required>
	                <label data-error="wrong" data-success="right" for="email">Enter Email</label>
	            </div>
	        </div>
            <div class="md-form form-sm mb-4">
                <i class="fa fa-envelope prefix"></i>
                <input type="password" id="password" class="form-control form-control-sm validate" name="password" required>
                <label data-error="wrong" data-success="right" for="password">Enter Password</label>
            </div>
		  </div>
		</div>
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