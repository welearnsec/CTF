
<html>
 <body bgcolor="#f1e9e8">
<title>Brain Fuck</title>


<script>
function myFunction() {
    alert("Bruhhh! i said dont click!");
}
</script>

<?php


    session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
}
     
/*** Comment ***/
 
?>
<p><center>Hello user1, you have successfully logged in!</p><a href="logout.php">Logout</a></center>
<br>
<?php 
$usertype = $_SESSION['usertype'] ;
$username = $_SESSION['simple_login'] ;
if ($usertype == 'admin'){
echo '<form action="/ctf4/home.php" method="GET"><center><input type="text" value="Cookie Jar" name="xss"><input type="submit" name="submit"><br></center></form><br>';


echo '<center><img src="images/darkness.jpg"><br><br><a href="backup/hello.png" download>Click Me</a></center>';

echo '<input type="hidden" value="++++++++++[>+>+++>+++++++>++++++++++<<<<-]>>>>+.<----------------.>.+.<-.-.+.-----.+++++++++.-----.----.++.+++++.>-----.++.<---.+++.----.+++++.--------..+.++++.>++.<-..>----.<++++.>++.<+.>-.<----."';



}else{

echo '<center><a onclick="myFunction()">Dont <u>click</u> Me</a></center><br>';
echo '<center><img src="images/user.jpeg"></center>';
}

?>  

</body>
</html>

