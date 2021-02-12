<?php

$uname=$_POST["uname"];
$pword=$_POST["pword"];

//echo "<br>".$uname;
//echo "<br>".$pword; 

include "connection1.php";

$selectplayer="select * 
               from players
			   where uname='$uname'
			   and pword='$pword'
			   ";
			   
//$insertUser="insert into users values('$fName', '$lName', '$eMail','$pw' ,'$age' ,'$mobile')";

$result=mysqli_query($con,$selectplayer);
/*if($result)
{
	echo "player registered";
	}
	else
{
die ("sqlstatmentNOT excuted".mysqli_error($con ));
}*/


if( mysqli_num_rows($result)==1 )
{
	session_start();
	$_SESSION["loggedUser"]=$uname;
	
	//echo "<h1>Player account created Successfully </h1>";
	//echo "<a href='signIn_as_player.php'>click here to login</a>";
	mysqli_close($con);
	header('location:playerProfile.php');
}
else
{
	echo"<h1>"."Invalid eMail or password"."</h1>";
	mysqli_close($con);
}


?>