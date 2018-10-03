<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Places</title>

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

	<style type="text/css">
		#near{
			color: black;
		}
		.tab-pane{
			color: white;
		}
		hr{
			color: black;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="opacity:1" id="navbar">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand">Tourista</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item nav-prod">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					<li class="nav-item nav-prod">
						<a href="guidelogin.php" class="nav-link">GUIDE WITH US!</a>
					</li>
					<li class="nav-item nav-prod">
						<a class="nav-link" data-toggle="modal" href="#modalLRForm" id="log">LOGIN/SIGN UP</a>
					</li>
					<li class="nav-item nav-prod">
						<a class="nav-link" href="Logout.php" id="logout">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br><br><br>

		<?php
			if(isset($_SESSION['login_user'])){

				$s=$_SESSION['login_user'];
				  echo "<script>
						var l = document.getElementById('log');
						l.innerHTML = '$s';
						l.href = '#';
					  	</script>";
				}

		?>

	<!-- Nav tabs -->
 <ul class="nav nav-tabs md-tabs nav-justified" style="background-color: rgb(128,0,0)" role="tablist">
     <li class="nav-item">
         <a class="nav-link active" data-toggle="tab" href="#parent" role="tab"><i class="fa fa-map-marker"></i> Description</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#near" role="tab"><i class="fa fa-map"></i> Nearby Places</a>
     </li>
     <li class="nav-item" id="navhotel">
         <a class="nav-link" data-toggle="tab" href="#hotels" role="tab"><i class="fa fa-hotel"></i> Hotels</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#guides" role="tab"><i class="fa fa-users"></i> Guides</a>
     </li>
 </ul>


 <!-- Tab panels -->
 <div class="tab-content">
     <!--Panel 1-->
     <div class="tab-pane fade in show active" id="parent" role="tabpanel">
         <br>
         
         <?php

         	if(isset($_GET['place'])){
         		$place = $_GET['place'];
         		$conn = mysqli_connect('localhost','root','','Tourista');
         		$sql = "SELECT * FROM Place WHERE Name = '$place'";
         		if($result=mysqli_query($conn,$sql)){
         			$row = mysqli_fetch_assoc($result);
         			$name = $row['Name'];
         			$desc = $row['Description'];
         			$img = $row['Image'];
 					if($fh = fopen($desc, 'r')){
						$line = file_get_contents($desc);
						fclose($fh);
					}
         			echo "<html>
         					<div class='container'>
         						<img src = '$img' class='img-fluid float-img' style='float:left;width:40%;' align = 'left'>
         						<span>$line</span>
         					</div>
         				  </html>";
         		}	
         	}
         ?>
     </div>
     <!--/.Panel 1-->

     <!--Panel 2-->
     <div class="tab-pane fade container" id="near" role="tabpanel">
         <br>

         <?php

         	if(isset($_GET['place'])){
         		$place = $_GET['place'];
         		$conn = mysqli_connect('localhost','root','','Tourista');
         		$sql = "SELECT Name, Description, Image FROM Place WHERE Parent_Place = '$place'";
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

						while($row=mysqli_fetch_assoc($result)){
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
							<div class='card'>

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
         		}
         	
         	?>	

     </div>
     <!--/.Panel 2-->

     <!--Panel 3-->
     <div class="tab-pane fade container" id="hotels" role="tabpanel">
         <br>
    		
         <?php

         	if(isset($_GET['place'])){
         		$place = $_GET['place'];
         		$conn = mysqli_connect('localhost','root','','Tourista');
         		$sql = "SELECT PlaceID FROM PLACE WHERE Name = '$place'";
         		$result = mysqli_query($conn,$sql);
         		$row = mysqli_fetch_assoc($result);
         		$pid = $row['PlaceID'];
         		$sql = "SELECT Name, Image, Details FROM Hotel WHERE PlaceID = '$pid'";
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

						while($row=mysqli_fetch_assoc($result)){
							$name = $row['Name'];
							$img = $row['Image'];
							$desc = $row['Details'];
							$count++;
							$line = '';
							if($fh = fopen($desc, 'r')){
								$line = file_get_contents($desc);
								$line = explode("\n", $line,2);
								$line[0] = trim($line[0]);
								fclose($fh);
							}
							echo "
							<div class='card'>

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
         		}
         	
         	?>	 

     </div>
     <!--/.Panel 3-->

    <?php
		// if(!isset($_SESSION['login_user'])){
		// 	echo "<script>
		// 			var h = document.getElementById('navhotel');
		// 			h.style.display = 'none';
	 //          	  </script>";
		// }		
	?>

     <!--Panel 4-->
     <div class="tab-pane fade" id="guides" role="tabpanel">
         <br>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
     </div>
     <!--/.Panel 4-->
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

	<script type="text/javascript">
		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});

	</script>

</body>
</html>
