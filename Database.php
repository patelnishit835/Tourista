<?php

$conn = mysqli_connect("localhost","root","","Tourista");



$sql = "INSERT INTO Place VALUES('Gokarna','','Gokarna.jpg','Gokarna.txt','Family Vacation','NULL')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Gokarna Beach','','Gokarna Beach.jpg','Gokarna Beach.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Half Moon','','Half Moon.jpg','Half Moon.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Kudle Beach','','Kudle Beach.jpg','Kudle Beach.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Mahabaleshwar Temple','','Mahabaleshwar Temple.jpg','Mahabaleshwar Temple.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('MahaGanpati Temple','','MahaGanpati Temple.jpg','MahaGanpati Temple.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Murudeshwar Temple','','Murudeshwar Temple.jpg','Murudeshwar Temple.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Om Beach','','Om Beach.jpg','Om Beach.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Paradise Beach','','Paradise Beach.jpg','Paradise Beach.txt','Family Vacation','Gokarna')";
mysqli_query($conn,$sql);

$sql = "INSERT INTO Place VALUES('Kullu Manali','','Kullu Manali.jpg','Kullu Manali.txt','Family Vacation','NULL')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Temple of Kullu Valley','','Temple of Kullu Valley.jpg','Temple of Kullu Valley.txt','Family Vacation','Kullu Manali')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Temple of Manali','','Temple of Manali.jpg','Temple of Manali.txt','Family Vacation','Kullu Manali')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Hot Water Spring','','Hot Water Spring.jpg','Hot Water Spring.txt','Family Vacation','Kullu Manali')";
mysqli_query($conn,$sql);

$sql = "INSERT INTO Place VALUES('Malvan','','Malvan.jpg','Malvan.txt','Romantic','NULL')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Tarkarli Beach','','Tarkarli Beach.jpg','Tarkarli Beach.txt','Romantic','Malvan')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Place VALUES('Sindhudurg Fort','','Sindhudurg Fort.jpg','Sindhudurg Fort.txt','Romantic','Malvan')";
mysqli_query($conn,$sql);


$sql = "SELECT PlaceID FROM Place WHERE Name = 'Gokarna'";
$temp = mysqli_query($conn, $sql);
$PlaceID = mysqli_fetch_array($temp);

$sql = "INSERT INTO Hotel VALUES('Sanskruti Resort','Gokarna','','Sanskruti Resort.txt','S1.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Sanskruti Resort','Gokarna','','Sanskruti Resort.txt','S2.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Sanskruti Resort','Gokarna','','Sanskruti Resort.txt','S3.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Sanskruti Resort','Gokarna','','Sanskruti Resort.txt','S4.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Sanskruti Resort','Gokarna','','Sanskruti Resort.txt','S5.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);

$sql = "INSERT INTO Hotel VALUES('Kudle Beach Resort','Gokarna','','Kudle Beach Resort.txt','k1.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Kudle Beach Resort','Gokarna','','Kudle Beach Resort.txt','k2.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Kudle Beach Resort','Gokarna','','Kudle Beach Resort.txt','k3.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Kudle Beach Resort','Gokarna','','Kudle Beach Resort.txt','k4.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Kudle Beach Resort','Gokarna','','Kudle Beach Resort.txt','k5.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);

$sql = "SELECT PlaceID FROM Place WHERE Name = 'Kullu Manali' LIMIT 1";
$PlaceID = mysqli_fetch_array(mysqli_query($conn, $sql));

$sql = "INSERT INTO Hotel VALUES('Shobha Royale','Kullu Manali','','Shobha Royale.txt','Shobha1Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Shobha Royale','Kullu Manali','','Shobha Royale.txt','Shobha2Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Shobha Royale','Kullu Manali','','Shobha Royale.txt','Shobha3Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Shobha Royale','Kullu Manali','','Shobha Royale.txt','Shobha4Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Shobha Royale','Kullu Manali','','Shobha Royale.txt','Shobha5Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Shobha Royale','Kullu Manali','','Shobha Royale.txt','Shobha6Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);

$sql = "INSERT INTO Hotel VALUES('Neeralaya Kullu','Kullu Manali','','Neeralaya Kullu.txt','Neeralaya1Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Neeralaya Kullu','Kullu Manali','','Neeralaya Kullu.txt','Neeralaya2Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Neeralaya Kullu','Kullu Manali','','Neeralaya Kullu.txt','Neeralaya3Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Neeralaya Kullu','Kullu Manali','','Neeralaya Kullu.txt','Neeralaya4Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Neeralaya Kullu','Kullu Manali','','Neeralaya Kullu.txt','Neeralaya5Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);

$sql = "INSERT INTO Hotel VALUES('Beautiful Machan Style Rooms','Kullu Manali','','Beautiful Machan Style Rooms.txt','Machan1Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Beautiful Machan Style Rooms','Kullu Manali','','Beautiful Machan Style Rooms.txt','Machan2Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Beautiful Machan Style Rooms','Kullu Manali','','Beautiful Machan Style Rooms.txt','Machan3Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Beautiful Machan Style Rooms','Kullu Manali','','Beautiful Machan Style Rooms.txt','Machan4Kullu.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);


$sql = "SELECT PlaceID FROM Place WHERE Name = 'Malvan' LIMIT 1";
$PlaceID = mysqli_fetch_array(mysqli_query($conn, $sql));

$sql = "INSERT INTO Hotel VALUES('Hotel Sagar Kinara','Malvan','','Hotel Sagar Kinara.txt','sagar1malvan.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Hotel Sagar Kinara','Malvan','','Hotel Sagar Kinara.txt','sagar2malvan.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Hotel Sagar Kinara','Malvan','','Hotel Sagar Kinara.txt','sagar3malvan.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Hotel Sagar Kinara','Malvan','','Hotel Sagar Kinara.txt','sagar4malvan.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);
$sql = "INSERT INTO Hotel VALUES('Hotel Sagar Kinara','Malvan','','Hotel Sagar Kinara.txt','sagar5malvan.jpg','$PlaceID[0]')";
mysqli_query($conn,$sql);

?>