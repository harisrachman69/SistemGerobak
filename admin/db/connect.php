<?php
$con = mysqli_connect("localhost","id13603045_tokoantik2","DellasDhoweh2000_");
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con, "id13603045_tokoantik");
?>  