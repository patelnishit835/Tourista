<?php

if(isset($_POST['search'])) {

			$val = $_POST['search'];
			$conn = mysqli_connect("localhost","root","","Tourista");
			$sql = "SELECT Name
		    		FROM Place
		    		WHERE Name LIKE '%$val%'";

		    $q = mysqli_query($conn, $sql);
		    $count = mysqli_num_rows($q);
		    $op = '';

		    echo "<ul>";

		    if($count == 0) {
		    	$op = 'No results!';
		    }
		    else {
		    	while ($row = mysqli_fetch_assoc($q)) {

		    		$name = $row['Name'];

		    		echo '<li>

		    		<a>'.$name.'</a>  </li>
		    		';

		    	}
		    	echo"</ul>";
		    }

		}



	?>