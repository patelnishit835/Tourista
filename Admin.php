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
			<a href="#" class="navbar-brand" style="color: rgb(224,18,29);">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<div style="background-color: rgba(224,18,29,0.75);">
					<li class="nav-item active nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					</div>
				</ul>
			</div>
		</div>
	</nav>
	<div class="card-deck">
		<!--News card-->
		<div class="card col-6 text-red border-danger bg-light text-center">
		    <div class="card-body">
		    	<h3 class="card-title font-bold pb-2"><strong>Add Place</strong></h3>
		        <div class="row">
		            <div class="col-md-4 offset-md-1 mx-3 my-5">
		                <!--Featured image-->
		                <div class="view overlay">
		                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
		                    <a>
		                        <div class="mask rgba-white-slight"></div>
		                    </a>
		                    <button type="button" class="btn btn-default waves-effect ml-auto">Upload Picture</button>
		                </div>
		            </div>
		            <div class="col-md-7 text-left ml-3 mt-3">
		            	<form>
		            		<div class="md-form form-sm mb-2">
		                        <input type="text" id="Input1" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="name" required>
		                        <label data-error="wrong" data-success="right" for="Input1">Place Name</label>
		                    </div>
		                    <div class="md-form form-sm mb-2">
		                        <input type="text" id="Input2" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="category" required>
		                        <label data-error="wrong" data-success="right" for="Input2">Category</label>
		                    </div>
		                    <div class="md-form form-sm mb-2">
		                        <input type="text" id="Input3" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="parentplace" required>
		                        <label data-error="wrong" data-success="right" for="Input3">Parent Place</label>
		                    </div>
		                    <div class="input-group mb-2">
		                    	  <div class="input-group-prepend">
								    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
								  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
							    <label class="custom-file-label" for="inputGroupFile01">Upload Description</label>
							  </div>
							</div>
		            	</form>	     			
		            </div>
		        </div>
		    </div>
		</div>
		<div class="card col-6 text-red border-danger bg-light text-center">
		    <div class="card-body">
		    	<h3 class="card-title font-bold pb-2"><strong>Add Hotel</strong></h3>
		        <div class="row">
		            <div class="col-md-4 offset-md-1 mx-3 my-5">
		                <!--Featured image-->
		                <div class="view overlay">
		                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
		                    <a>
		                        <div class="mask rgba-white-slight"></div>
		                    </a>
		                    <button type="button" class="btn btn-default waves-effect ml-auto">Upload Picture</button>
		                </div>
		            </div>
		            <div class="col-md-7 text-left ml-3 mt-3">
		            	<form>
		            		<div class="md-form form-sm mb-2">
		                        <input type="text" id="Input4" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="name" required>
		                        <label data-error="wrong" data-success="right" for="Input4">Hotel Name</label>
		                    </div>
		                    <div class="md-form form-sm mb-2">
		                        <input type="text" id="Input5" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="category" required>
		                        <label data-error="wrong" data-success="right" for="Input5">Location</label>
		                    </div>
		                    <div class="input-group mb-2">
		                      <div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
							  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon01">
							    <label class="custom-file-label" for="inputGroupFile02">Upload Description</label>
							  </div>
							</div>
		            	</form>	     			
		            </div>
		        </div>
		    </div>
		</div>
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