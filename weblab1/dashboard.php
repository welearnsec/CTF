<html>
 <title>Meme Company</title>
<center><br><br>
<?php
    session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
    }
     
/*** you can  write your protected content here ***/
 
?>
<img src="slow.jpg" title="made at imgflip.com"/>
<br><br><b> Go back <a href="logout.php">Back</a>
</center>
</html>
