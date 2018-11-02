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

		    echo "<ul style='list-style:none;'>";

		    if($count == 0) {
		    	$op = 'No results!';
		    }
		    else {
		    	while ($row = mysqli_fetch_assoc($q)) {

		    		$name = $row['Name'];
		    		$route = 'Places.php?place='.$name;

		    		echo '<li>

		    		<a href = '.$route.' style="color:black;">'.$name.'</a>  </li>
		    		';

		    	}
		    	echo"</ul>";
		    }

		}



	?>