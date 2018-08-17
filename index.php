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

</head>
<body background-color="rgb(244, 167, 66)">

	<nav class="navbar navbar-expand-md navbar-light sticky-top bg-faded">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Guide with us!</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="modal" href="#modalLRForm">Login/SignUp</a>
					</li>
					<!--<li class="nav-item">
						<a href="#" class="nav-link">Sign Up</a>
					</li>-->
				</ul>
			</div>
		</div>
	</nav>

	<!--Carousel Wrapper-->
	<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
	    <!--Indicators-->
	    <ol class="carousel-indicators">
	        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
	        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
	        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
	    </ol>
	    <!--/.Indicators-->
	    <!--Slides-->
	    <div class="carousel-inner" role="listbox">
	        <!--First slide-->
	        <div class="carousel-item active">
	            <img class="d-block w-100" src="north.jpg" alt="First slide">
	        </div>
	        <!--/First slide-->
	        <!--Second slide-->
	        <div class="carousel-item">
	            <img class="d-block w-100" src="west.jpg" alt="Second slide">
	        </div>
	        <!--/Second slide-->
	        <!--Third slide-->
	        <div class="carousel-item">
	            <img class="d-block w-100" src="east.jpg" alt="Third slide">
	        </div>
	        <div class="carousel-item">
	            <img class="d-block w-100" src="south.jpg" alt="Fourth slide">
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

	<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog cascading-modal" role="document">
	        <!--Content-->
	        <div class="modal-content">

	            <!--Modal cascading tabs-->
	            <div class="modal-c-tabs">

	                <!-- Nav tabs -->
	                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
	                    <li class="nav-item">
	                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
	                    </li>
	                </ul>

	                <!-- Tab panels -->
	                <div class="tab-content">
	                    <!--Panel 7-->
	                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

	                        <!--Body-->
	                        <div class="modal-body mb-1">
	                        	<form>
	                            <div class="md-form form-sm mb-5">
	                                <i class="fa fa-envelope prefix"></i>
	                                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" required>
	                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your Email</label>
	                            </div>

	                            <div class="md-form form-sm mb-4">
	                                <i class="fa fa-lock prefix"></i>
	                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" minlength="6" required="true">
	                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your Password</label>
	                            </div>
	                            <div class="text-center mt-2">
	                                <button class="btn btn-info">Log in</button>
	                            </div>
	                        	</form>
	                        </div>
	                        <!--Footer-->
	                        <div class="modal-footer">
	                            <div class="options text-center text-md-right mt-1">
	                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
	                            </div>
	                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
	                        </div>

	                    </div>
	                    <!--/.Panel 7-->

	                    <!--Panel 8-->
	                    <div class="tab-pane fade" id="panel8" role="tabpanel">

	                        <!--Body-->
	                        <div class="modal-body">
	                        	<form>
	                        	<div class="md-form form-sm mb-5">
	                                <i class="fa fa-user prefix"></i>
	                                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" required>
	                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your Name</label>
	                            </div>

	                            <div class="md-form form-sm mb-5">
	                                <i class="fa fa-phone prefix"></i>
	                                <input type="text" id="modalLRInput13" class="form-control form-control-sm validate" pattern="[0-9]{10}" required>
	                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your Phone Number</label>
	                            </div>

	                            <div class="md-form form-sm mb-5">
	                                <i class="fa fa-envelope prefix"></i>
	                                <input type="email" id="modalLRInput14" class="form-control form-control-sm validate" required>
	                                <label data-error="wrong" data-success="right" for="modalLRInput14">Your Email</label>
	                            </div>

	                            <div class="md-form form-sm mb-5">
	                                <i class="fa fa-lock prefix"></i>
	                                <input type="password" id="modalLRInput15" class="form-control form-control-sm validate" minlength="6" required="true">
	                                <label data-error="wrong" data-success="right" for="modalLRInput15">Your Password</label>
	                            </div>

	                            <div class="md-form form-sm mb-4">
	                                <i class="fa fa-lock prefix"></i>
	                                <input type="password" id="modalLRInput16" class="form-control form-control-sm validate" minlength="6" required="true">
	                                <label data-error="wrong" data-success="right" for="modalLRInput16">Confirm Password</label>
	                            </div>

	                            <div class="text-center form-sm mt-2">
	                                <button class="btn btn-info">Sign Up </button>
	                            </div>
	                            </form>
	                        </div>
	                        <!--Footer-->
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
	                        </div>
	                    </div>
	                    <!--/.Panel 8-->
	                </div>
	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>

	<!--PHP CODE FOR DATABASE CREATION -->

		<?PHP
				
		$conn = mysqli_connect("localhost","root","");
		$sql_create = "CREATE DATABASE IF NOT EXISTS Tourista";
		if(mysqli_query($conn,$sql_create)){
			$conn = mysqli_connect("localhost","root","","Tourista");
			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'User'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE User(
					Name VARCHAR(50) not null,
					UserID INTEGER AUTO_INCREMENT not null,
					EmailID VARCHAR(50) NOT NULL,
					Contact_No VARCHAR(10) NOT NULL,
					Password VARCHAR(50) NOT NULL,
					PRIMARY KEY(UserID)
				);";

				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}
			}

			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'Place'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE Place(
					Name VARCHAR(50) NOT NULL,
					PlaceID INTEGER AUTO_INCREMENT not null,
					Image VARCHAR(50) not null,
					Description VARCHAR(50) not null,
					Category VARCHAR(50) not null,
					Parent_Place VARCHAR(50) not null,
					PRIMARY KEY(PlaceID)
			);";
				
				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}

			}

			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'Hotel'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE Hotel(
					Name VARCHAR(50) NOT NULL,
					Location VARCHAR(50) NOT NULL,
					HotelID INTEGER AUTO_INCREMENT NOT NULL,
					Details VARCHAR(50) NOT NULL,
					Image VARCHAR(50) NOT NULL,
					PlaceID INTEGER NOT NULL,
					FOREIGN KEY(PlaceID) REFERENCES Place(PlaceID),
					PRIMARY KEY(HotelID)
				);";

				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}
				
			}

			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'Guide'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE Guide(
					Name VARCHAR(50) NOT NULL,
					GuideID INTEGER AUTO_INCREMENT NOT NULL,
					EmailID VARCHAR(50) NOT NULL,
					Password VARCHAR(50) NOT NULL,
					Aadhaar VARCHAR(50) NOT NULL,
					ProfilePic VARCHAR(50) NOT NULL,
					Availability BOOLEAN NOT NULL,
					Place_of_Work VARCHAR(50) NOT NULL,
					PlaceID INTEGER NOT NULL,
					FOREIGN KEY(PlaceID) REFERENCES Place(PlaceID),
					PRIMARY KEY(GuideID)
				);";


				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}
			}

			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'gRates'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE gRates(
					GuideID INTEGER NOT NULL,
					UserID INTEGER NOT NULL,
					Rating INTEGER NOT NULL,
					FOREIGN KEY(GuideID) REFERENCES Guide(GuideID),
					FOREIGN KEY(UserID) REFERENCES User(UserID),
					PRIMARY KEY(GuideID,UserID)
				);";

				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}

			}

			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'hRates'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE hRates(
					UserID INTEGER NOT NULL,
					HotelID INTEGER NOT NULL,
					Rating INTEGER NOT NULL,
					FOREIGN KEY(HotelID) REFERENCES Hotel(HotelID),
					FOREIGN KEY(UserID) REFERENCES User(UserID),
					PRIMARY KEY(HotelID,UserID)
				);";

				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}
				
			}

			if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE 'gMobile_No'")) > 0){
				//Table Exists
			}
			else{
				//Create new Table
				$sql = "CREATE TABLE gMobile_No(
					GuideID INTEGER NOT NULL,
					Mobile_No VARCHAR(10) NOT NULL,
					FOREIGN KEY(GuideID) REFERENCES Guide(GuideID),
					PRIMARY KEY(GuideID,Mobile_No)
				);";

				if(mysqli_query($conn,$sql)) {
					//echo "Table created successfully!!!"
				}
				else {
					echo mysqli_error($conn);
				}	
			}
		}

		else
			echo mysqli_error($conn);



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
