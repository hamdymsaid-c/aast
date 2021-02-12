<!DOCTYPE html>
<html>
<head>
<title>sign in as player</title>
<link rel="stylesheet" href="styles/registerAsPlayer.css">
</head>
<body>

<h2>sign in as player </h2>
<h2>Welcome <?php if($_GET!=null)  echo $_GET['firstname']." ".$_GET['lastname']; ?></h2>
<div class="container">
  <form  onsubmit="return validate()" name="playerForm" method="post" action="signInAsPlayer_handler.php">
	  <div class="row">
		<div class="col-25">
		  <label >Username:</label>
		</div>
		<div class="col-75">
		  <input type="text" id="username" name="uname" placeholder="your username..">
		</div>
	  </div>
	  <div class="row">
		<div class="col-25">
		  <label>Password:</label>
		</div>
		<div class="col-75">
		  <input type="password" id="password" name="pword" placeholder="Your password..">
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

<script>
function validate(){
valid = true;
var pass=document.playerForm.pword.value;
var un=document.playerForm.uname.value;
 var re=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
formLabels =document.getElementsByTagName("label");
if(un=="" )
  {
	formLabels[0].innerHTML="UserName: * [required]";
	formLabels[0].style.color="red";
	valid = false;
  }
  else if (re.test(un)==false )
  {
	formLabels[0].innerHTML="UserName: * [incorrect email]";
	formLabels[0].style.color="red";
	valid = false;
  }
  else
  {
	formLabels[0].innerHTML="UserName:";
	formLabels[0].style.color="black";
	valid =  true;
  }

if(pass=="" )
  {
	formLabels[1].innerHTML="Password: * [required]";
	formLabels[1].style.color="red";
	valid = false;
  }
  else if (pass.length!= 8 )
  {
	formLabels[1].innerHTML="Password: * [incorrect Password 8 chars required]";
	formLabels[1].style.color="red";
	valid = false;
  }
  else
  {
	formLabels[1].innerHTML="Password:";
	formLabels[1].style.color="black";
	valid = (valid)? true: false;
  }  
  
  
  return valid;
}


function clear2(){
  var myLabels=["UserName:", "Password:"];
  for (var i=0; i<myLabels.length; i++)
  {
	formLabels[i].innerHTML=myLabels[i];
	formLabels[i].style.color="black";
  }
  }

</script>

</body>
</html>
