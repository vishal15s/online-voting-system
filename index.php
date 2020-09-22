<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<p><center>
    <div ><img src="images\vote.png" class="i_home"></div>
    <legend><font color='#D4AF37' size="10">Voting is your right!!!</font></legend>
    <legend><font color='#D4AF37'size="10">Cast your vote</font></legend>
</center>
<link rel="stylesheet" href="style.css">
<?php include "footer.php";?>
