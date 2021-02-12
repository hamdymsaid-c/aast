<!DOCTYPE html>
<html>
<head>
<title>signIn_as_club</title>
<link rel="stylesheet" href="styles/registerAsPlayer.css">
</head>
<body>

<h2>signIn as club contact person </h2>

<div class="container">
  <form onsubmit="return validate()" name="playerForm" method="post" action="signInAsclub_handler.php" >
	  <div class="row">
		<div class="col-25">
		  <label for="fname">Contact person Username:</label>
		</div>
		<div class="col-75">
		  <input type="text" id="fname" name="uname" placeholder="Your name..">
		</div>
	  </div>
	  <div class="row">
		<div class="col-25">
		  <label for="lname">Password:</label>
		</div>
		<div class="col-75">
		  <input type="password" id="lname" name="pword" placeholder="Your password..">
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-25">
		</div>
		<div class="col-75">
		  <input type="submit" value="Submit">
		  <input type="reset" value="clear">
		</div>
	  </div>
  </form>
</div>

<script src="script/signInAsPlayer.js">

</script>

</body>
</html>
