<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<center>
<div>
   <img src="images/about.png">
   </div>
</center>
<link rel="stylesheet" href="style.css">

