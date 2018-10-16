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

</head>
<body style="background-color: rgba(32,32,32,1); color: red;">
	<br><br><br><br><br>
	<div class="col-6 mx-auto" style="background-color: rgb(64,64,64);">
		<h4 class="text-center">Email Verification</h4>
		<form action="OTP.php" method="POST">
			<div class="md-form form-sm mb-4">
				<input type="tel" id="otp" class="form-control form-control-sm validate" name="otp" maxlength="8" minlength="8" required>
		    	<label data-error="wrong" data-success="right" for="otp" style="margin-left: 1.1rem; color: red;">Enter OTP</label>
			</div>
			<div class="center text-center form-sm mt-1 mb-3">
                <button class="btn btn-info btn-outline-red waves-effect ml-auto lighten-2" type="submit" name="submitotp" id="btn">Submit</button>
            </div>
            <div>
            	<input type="hidden" name="oldotp" value="<?php echo $_POST['oldotp']; ?>">
            </div>
            <div>
            	<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
            </div>
            <div>
            	<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
            </div>
            <div>
            	<input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
            </div>
            <div>
            	<input type="hidden" name="aadhar" value="<?php echo $_POST['aadhar']; ?>">
            </div>
            <div>
            	<input type="hidden" name="work" value="<?php echo $_POST['work']; ?>">
            </div>
            <div>
            	<input type="hidden" name="mobile" value="<?php echo $_POST['mobile']; ?>">
            </div>
            <div>
            	<input type="hidden" name="avail" value="<?php echo $_POST['avail']; ?>">
            </div>
	        <div>
            	<input type="hidden" name="profilepic" value="<?php if(isset($_POST['profilepic'])){
            		echo $_POST['profilepic'];
            	}
            	else{
            		echo $_FILES['profilepic']['name'];
            	} ?>">
            </div> 
		</form>
	</div>

		<?php
			if(isset($_POST['submit'])){

				$name = $_POST['name'];
				$email = $_POST['id'];
				$otp = $_POST['oldotp'];

				$target = "Guide/".basename($_FILES['profilepic']['name']);
				move_uploaded_file($_FILES['profilepic']['tmp_name'], $target);
				$_POST['profilepic'] = $_FILES['profilepic']['name'];

				// $to = 'akshay.kotak@somaiya.edu';
				$subject = 'Tourista Email Verification';
				$message = "Dear ".$name.", Your OTP - ".$otp."\n"."Use it and Verify Yourself"."\n\n\n\n\n"."Regards,\nTourista.";
				$headers = 'From: Tourista <touristafuntovisit@gmail.com>';
				mail($email, $subject, $message, $headers);
			}

			if(isset($_POST['submitotp'])){
				$inotp = $_POST['otp'];
				// echo $_POST['oldotp']."<br>";
				if($inotp == $_POST['oldotp']){
					// echo "Successfull!!!";
					$conn = mysqli_connect("localhost","root","","Tourista");
					
					$name = $_POST['name'];
					$email = $_POST['id'];
					$password = $_POST['password'];
					$aadhar = $_POST['aadhar'];
					// $profilepic = $_FILES['profilepic']['name'];
					$profilepic = $_POST['profilepic'];
					$place_of_work = $_POST['work'];
					$availability = $_POST['avail'];
					$mobile = $_POST['mobile'];

					$sql = "SELECT PlaceID FROM Place WHERE Name = '$place_of_work'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					$placeid = $row['PlaceID'];
					$sql = "INSERT INTO Guide VALUES('$name','','$email','$password','$aadhar','$profilepic','$availability','$place_of_work','$placeid','$mobile')";
					
					if(mysqli_query($conn,$sql)){
						echo"Successful";
					}

					session_start();
					$_SESSION['guide_user_signup'] = $name;
					$sql = "SELECT GuideID FROM Guide WHERE Name = '$name'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					$guideid = $row['GuideID'];
					header("location: GuideUserProfile.php?id=".$guideid);
				}
				else{
					// if($_POST['avail'] == "true"){
					// 	//do nothing 
					// }
					// else{
					// 	 unset($_POST['avail']);
					// }
					// echo "OTP not Verified!!";
				}
			}

		?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>
</html>