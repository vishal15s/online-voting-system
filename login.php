<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php"; 

if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<section class="logpage">
<div class="bg">
<center>
<legend> <h3 style="color:white"> LOGIN </h3></legend> </center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
<input class="field" type="text" name="username" value="" placeholder="Username" > 
<input class="field" type="password" name="password" value=""   placeholder="Password">
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<input  class="button" type="submit" name="login" value="Login" > 
</form></font>
</div>
</section>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
<link rel="stylesheet" href="style.css">
