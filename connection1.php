<?php
$con= mysqli_connect("localhost:3307","root","","sportdb");
if(!$con)
{
	die("Error: problem with sql server".mysqli_connect_error($con));
}

?>