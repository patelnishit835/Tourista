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

	<div class="row mt-3">
		<div class="card-deck">
			<!--News card-->
			<div class="card col-6 text-red border-danger bg-light text-center">
			    <div class="card-body">
			    	<h3 class="card-title font-bold pb-2"><strong>Add Place</strong></h3>
			        <form action="Admin.php" method="POST" enctype="multipart/form-data">
			        <div class="row">
			            <div class="col-md-4 offset-md-1 mx-3 my-5">
			                <!--Featured image-->
			                <div class="view overlay">
			                    <img id="place" src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
			                    <a>
			                        <div class="mask rgba-white-slight"></div>
			                    </a>
			                </div>
				  			<input type="file" name="placeimage" onchange="readURL(this,'#place');" id="placeUpload" style="visibility: hidden;" accept=".png, .jpg, .jpeg"/>
		                    <button type="button" onclick="document.getElementById('placeUpload').click(); return false;" class="btn btn-default waves-effect ml-auto">Upload Picture</button>
			            </div>
			            <div class="col-md-7 text-left ml-3 mt-3">			  
		            		<div class="md-form form-sm mb-2">
		                        <input type="text" id="placename" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="placename" required>
		                        <label data-error="wrong" data-success="right" for="placename">Place Name</label>
		                    </div>
		                    <div class="md-form form-sm mb-2">
		                        <input type="text" id="placecategory" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="placecategory" required>
		                        <label data-error="wrong" data-success="right" for="placecategory">Category</label>
		                    </div>
		                    <div class="md-form form-sm mb-2">
		                        <input type="text" id="placeparent" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="placeparent" required>
		                        <label data-error="wrong" data-success="right" for="placeparent">Parent Place</label>
		                    </div>
		                    <!-- <div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
								</div>
								<div class="custom-file">
									<input type="file" name="placedescription" onchange="readDescription(this,'#placedescription');" class="custom-file-input" id="description" style="visibility: hidden;">
									<label id="placedescription" class="custom-file-label" for="description">Upload Description</label>
								</div>
							</div> -->
							<div>
								<input type="file" name="placedescription">
							</div>     			
			            </div>
			        </div>
			        <div class="row mb-1 center">
			        	<button name="placesubmit" type="submit" class="btn btn-info btn-outline-red waves-effect mx-auto lighten-2">Add Place</button>
			        </div>
			        </form>
			    </div>
			</div>
			<div class="card col-6 text-red border-danger bg-light text-center">
			    <div class="card-body">
			    	<h3 class="card-title font-bold pb-2"><strong>Add Hotel</strong></h3>
			        <form action="Admin.php" method="POST" enctype="multipart/form-data">
			        <div class="row" enctype="multipart/form-data">
			            <div class="col-md-4 offset-md-1 mx-3 my-5">
			                <!--Featured image-->
			                <div class="view overlay">
			                    <img id="hotel" src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
			                    <a>
			                        <div class="mask rgba-white-slight"></div>
			                    </a>
			                </div>
			                <input type="file" name="hotelimage" onchange="readURL(this,'#hotel');" id="hotelUpload" style="visibility: hidden;" accept=".png, .jpg, .jpeg"/>
		                    <button type="button" onclick="document.getElementById('hotelUpload').click(); return false;" class="btn btn-default waves-effect ml-auto">Upload Picture</button>
			            </div>
			            <div class="col-md-7 text-left ml-3 mt-3">
			            		<div class="md-form form-sm mb-2">
			                        <input type="text" id="Input4" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="hotelname" required>
			                        <label data-error="wrong" data-success="right" for="Input4">Hotel Name</label>
			                    </div>
			                    <div class="md-form form-sm mb-2">
			                        <input type="text" id="Input5" class="form-control form-control-sm validate" pattern="[A-Za-z\s]+" name="hotellocation" required>
			                        <label data-error="wrong" data-success="right" for="Input5">Location</label>
			                    </div>
			                    <div class="md-form form-sm mb-2">
			                        <input type="number" id="Input6" class="form-control form-control-sm validate" name="hotellocationid" required>
			                        <label data-error="wrong" data-success="right" for="Input6">Location ID</label>
			                    </div>
			                    <!-- <div class="input-group mb-2">
			                      <div class="input-group-prepend">
								    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
								  </div>
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" id="inputGroupFile02" style="visibility: hidden;">
								    <label class="custom-file-label" for="inputGroupFile02">Upload Description</label>
								  </div>
								</div> -->
								<div>
									<input type="file" name="hoteldescription">
								</div>   			
			            </div>
			        </div>
			        <div class="row mb-1 center">
			        	<button name="hotelsubmit" type="submit" class="btn btn-info btn-outline-red waves-effect mx-auto lighten-2">Add Hotel</button>
			        </div>
			        </form>
			    </div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Users</p>
                      <div class="fluid-container">
                        <h3 id="user" class="font-weight-medium text-right mb-0">650</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Number Of Users
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-right">
                      <p class="mb-0 text-right">Guides</p>
                      <div class="fluid-container">
                        <h3 id="guide" class="font-weight-medium text-right mb-0">455</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Number Of Guides
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-right">
                      <p class="mb-0 text-right">Places</p>
                      <div class="fluid-container">
                        <h3 id="placenum" class="font-weight-medium text-right mb-0">1000</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Number Of Places
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-right">
                      <p class="mb-0 text-right">Hotels</p>
                      <div class="fluid-container">
                        <h3 id="hotelnum" class="font-weight-medium text-right mb-0">246</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number Of Hotels
                  </p>
                </div>
              </div>
            </div>
    </div>

    <div class="row mt-3 mb-3">
    		<div class="card col-6 mx-auto text-red border-danger bg-light text-center">
			    <div class="card-body">
			    	<h3 class="card-title font-bold pb-2"><strong>Remove Guide</strong></h3>
			        <form action="Admin.php" method="POST" enctype="multipart/form-data">
			        <div class="row">
			            <div class="col-12 text-left ml-3 mt-3">
			            		<div class="md-form form-sm mb-2">
			                        <input type="text" id="guidename" class="form-control form-control-sm validate" name="guidename" required>
			                        <label data-error="wrong" data-success="right" for="guidename">Guide Name</label>
			                    </div>
			                    <div class="md-form form-sm mb-2">
			                        <input type="number" id="guideid" class="form-control form-control-sm validate" name="guideid" required>
			                        <label data-error="wrong" data-success="right" for="guideid">Guide ID</label>
			                    </div>    			
			            </div>
			        </div>
			        <div class="row mb-1">
			        	<button name="guidesubmit" type="submit" class="btn btn-info btn-outline-red waves-effect mx-auto lighten-2">Remove Guide</button>
			        </div>
			        </form>
			    </div>
			</div>    		
    </div>

    <?php

    $conn = mysqli_connect("localhost","root","","Tourista");

    if(isset($_POST['placesubmit']))
	{
		$target = "Description/".basename($_FILES['placedescription']['name']);
		move_uploaded_file($_FILES['placedescription']['tmp_name'], $target);

		$target = "Description/".basename($_FILES['placeimage']['name']);
		move_uploaded_file($_FILES['placeimage']['tmp_name'], $target);		

		$placename = $_POST['placename'];
		$placeimage = $_FILES['placeimage']['name'];
		$placedescription = $_FILES['placedescription']['name'];
		$placecategory = $_POST['placecategory'];
		$placeparent = $_POST['placeparent'];

		$sql = "INSERT INTO Place VALUES('$placename','','$placeimage','$placedescription','$placecategory','$placeparent')";
		mysqli_query($conn,$sql);

	}

	if(isset($_POST['hotelsubmit']))
	{
		$target = "Description/Hotels/".basename($_FILES['hoteldescription']['name']);
		move_uploaded_file($_FILES['hoteldescription']['tmp_name'], $target);

		$target = "Description/Hotels/".basename($_FILES['hotelimage']['name']);
		move_uploaded_file($_FILES['hotelimage']['tmp_name'], $target);		

		$hotelname = $_POST['hotelname'];
		$hotellocation = $_POST['hotellocation'];
		$hoteldescription = $_FILES['hoteldescription']['name'];
		$hotelimage = $_FILES['hotelimage']['name'];
		$hotellocationid = $_POST['hotellocationid'];

		$sql = "INSERT INTO Hotel VALUES('$hotelname','$hotellocation','','$hoteldescription','$hotelimage','$hotellocationid')";
		mysqli_query($conn,$sql);

	}

	if(isset($_POST['guidesubmit']))
	{
		$guidename = $_POST['guidename'];
		$guideid = $_POST['guideid'];

		$sql = "DELETE FROM Guide WHERE Name = '$guidename' AND GuideID = '$guideid'";
		mysqli_query($conn,$sql);
	}
	

    $sql = "SELECT count(UserID)
			FROM User";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_fetch_array($result);
	echo "<script>
			document.getElementById('user').innerHTML=$count[0];
		</script>
		";

	$sql = "SELECT count(GuideID)
			FROM Guide";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_fetch_array($result);
	echo "<script>
			document.getElementById('guide').innerHTML=$count[0];
		</script>
		";

	$sql = "SELECT count(PlaceID)
			FROM Place";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_fetch_array($result);
	echo "<script>
			document.getElementById('placenum').innerHTML=$count[0];
		</script>
		";

	$sql = "SELECT count(HotelID)
			FROM Hotel";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_fetch_array($result);
	echo "<script>
			document.getElementById('hotelnum').innerHTML=$count[0];
		</script>
		";




    ?>

    <script>
		function readURL(input,temp)
		{
		    if (input.files && input.files[0]) 
		    {
		        var reader = new FileReader();
		        reader.onload = function(e) {
		            $(temp).attr('src', e.target.result);
		            $(temp).hide();
		            $(temp).fadeIn(650);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
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