<!doctype html>
<?php
session_start();
if(!isset($_SESSION["loggedUser"]))
{
	header('location: signIn_as_player.php');
}

?>
<html>
<head>
	<title> Discover Your talent </title>
	<meta charset="UTF-8">
	<meta name="describtion"  content="ResponsiveWebSite">
	<!--<meta name="viewport" content="width=device-width, initial-scale:1">-->
	<link rel="stylesheet" href="styles/cssStyles.css">
	
</head>
<body>
<?php
//connect
include "connection1.php";

//echo "Welcom".$_SESSION["loggedUser"]."to our web site";
$mail=$_SESSION["loggedUser"];
$viewAll="select *
		  from players
		  where mail='$mail'
		  ";
		 $result= mysqli_query($con,$viewAll);
 if(!$result)
 {
	 echo("error:".mysqli_connect_error($con));
 }
else
{
	$row=mysqli_fetch_assoc($result);
	
	$firstname=$row["firstname"];
	$lastname=$row['lastname'];
	$aplayer=$row['aplayer'];
	$wplayer=$row['wplayer'];
	$hplayer=$row['hplayer'];
	$country=$row['country'];
	$telephone=$row['telephone'];
	$mail=$row['mail'];
	$uname=$row['uname'];
	//$pword=$_POST["pword"];
	
}
unset($_SESSION["loggedUser"]);

?>
<div id="header"><!--slide show container-->
<div><img src="images/1.jpg" alt="Messi" id="slideshow"></div>
    <a class="next"  onclick="next()">&#10095;</a> 
    <a class="prev"  onclick="prev()">&#10094;</a> 
 
</div>
<div id="menu">
	<ul>
	<li><a href="registerAsPlayer.html">Register as player</a></li>
	<li><a href="signIn_as_player.html">Login as player</a></li>
	<li><a href="registerAsClub.html">Register as a club</a></li>
	<li><a href="signIn_as_club.html">login as club</a></li>
	<li><a href="about.html">About US</a></li>
	</ul>
</div>
<div id="row">
<h1>Welcom <span><?php echo $firstname." ".$lastname;?></span></h1>
<label><b>First Name:</b></label><label><?php echo$firstname;?></label><br>
<label><b>Last Name:</b></label><label><?php echo$lastname;?></label><br>
<label><b>eMail:</b></label><label><?php echo$mail;?></label><br>
<label><b>Age:</b></label><label><?php echo$aplayer;?></label><br>
<label><b>Weight:</b></label><label><?php echo$wplayer;?></label><br>
<label><b>Height:</b></label><label><?php echo$hplayer;?></label><br>
<label><b>Mobile:</b></label><label><?php echo $telephone;?></label><br>
<label><b>Governerate:</b></label><label><?php echo $country;?></label><br>
<label><b>User Name:</b></label><label><?php echo $uname;?></label><br>
<a href="index.html">Click here to logout</a>



</div>
<div id="footer">&copy; VISIT US AGAIN </div>
<script>
    var counter = 1;
    function next(){
        if (counter == 12)
            {
                counter = 1;
            }
        else {counter ++;}
        document.getElementById("slideshow").src="images/" +counter+ ".jpg";
    }
    function prev(){
        if (counter == 1)
            {
                counter = 12;
            }
        else {counter --;}
        document.getElementById("slideshow").src="images/" +counter+ ".jpg";
    }
    setInterval(next,2000)
</script>
</body>

<html>