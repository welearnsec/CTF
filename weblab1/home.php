<?php
    session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
    }
     
/*** you can  write your protected content here ***/
 
?>
<title>Meme Company</title>
<script language="javascript">
    window.location.href = "dashboard.php"
</script>	

	<p>Hello <?php echo $username; ?>, you have successfully logged in! Heres your Flag : Flag(The_Go0d_Son)</p>	
<h1 align="center">Welcome, <?php echo $_SESSION['simple_login']; ?></h1>
<p align="center"><a href="logout.php">Logout</a></p>
