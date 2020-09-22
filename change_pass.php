<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>
<section class="logpageb">
<div class="bg">
<center><font style="color:white;font-size:20px">Change Password</font></center>
<?php global $error; echo $error;?>                  

<center><form action="change_pass_action.php" method="post" id="myform">
<input type="password" name="cpassword" value="" placeholder="Current Password " >
<br>
<br>
<input type="password" name="npassword" value="" placeholder="New Password ">
<br>
<br>
<input type="password" name="cnpassword" value="" placeholder="Confirm New Password ">
<br>
<br>
<input type="submit" name="cpass" value="UPDATE" >
</form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>

</div>
</section>