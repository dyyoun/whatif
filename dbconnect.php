<?php
$con = mysqli_connect("localhost","root","");
if(!$con){
die("can not connect" . mysqli_error());

}
	mysqli_select_db($con, "itech75") or die("can not connect");



	?>
