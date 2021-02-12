<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$aplayer=$_POST["aplayer"];
$wplayer=$_POST["wplayer"];
$hplayer=$_POST["hplayer"];
$country=$_POST["country"];
$telephone=$_POST["telephone"];
$mail=$_POST["mail"];
$uname=$_POST["uname"];
$pword=$_POST["pword"];
/* echo "<br>".$firstname;
echo "<br>".$lastname;
echo "<br>".$aplayer;
echo "<br>".$wplayer;
echo "<br>".$hplayer;
echo "<br>".$country;
echo "<br>".$telephone;
echo "<br>".$mail;
echo "<br>".$uname;
echo "<br>".$pword;  */

include "connection1.php";

$insertplayer="INSERT INTO players VALUES('$firstname','$lastname',$aplayer,$wplayer,$hplayer,'$country','$telephone','$mail','$uname','$pword')";
//$insertUser="insert into users values('$fName', '$lName', '$eMail','$pw' ,'$age' ,'$mobile')";

$result=mysqli_query($con,$insertplayer);

if($result)
{
	echo "<h1>Player account created Successfully </h1>";
	echo "<a href='signIn_as_player.php?firstname=".$firstname."&lastname=".$lastname."'>click here to login</a>";
	mysqli_close($con);
}
else
{
	echo"Error: ".mysqli_error($con);
	mysqli_close($con);
}


?>