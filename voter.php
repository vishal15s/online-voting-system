<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
    <center>
         <?php global $msg; echo $msg; ?>
    <?php global $error; echo $error; ?>
    </center>   
<div class="bg">
    <center>
    <h3 style="color:white;">Make a Vote </h3>
    </center>
    <form action="submit_vote.php" name="vote" method="post" id="myform" >
    <center><font size='6' style="color:white;"> Who is your favourite candidate? <BR></font></center>
   
    <div>       
    <div class="gallery">
        <img src="images/one.png" alt="c1" width="600" height="400">
        <div class="desc"><input type="radio" name="lan" value="Candidate-1">Person-1
            </div>
    </div>

    <div class="gallery">
        <img src="images/two.png" alt="c2" width="600" height="400">
        <div class="desc"><input type="radio" name="lan" value="Candidate-2">Person-2
            </div>
    </div>
    <div class="gallery">
        <img src="images/two.png" alt="c2" width="600" height="400">
        <div class="desc"><input type="radio" name="lan" value="Candidate-3">Person-3
            </div>
    </div>
    <div class="gallery">
        <img src="images/two.png" alt="c2" width="600" height="400">
        <div class="desc"><input type="radio" name="lan" value="Candidate-4">Person-4
            </div>
    </div>
       
    <br>
    </div>

   
    <center><input type="submit" value="Submit Vote" name="submit"  /></center>
    </form>
</div>
