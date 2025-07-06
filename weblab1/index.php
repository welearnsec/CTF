<?php
    $error = "";
    if(isset($_POST['username'],$_POST['password'])){
 
        /*** You can change username & password ***/
        $user = array(
                        "user" => "admin",
                        "pass"=>"goodben"          
                );
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if($username == $user['user'] && $pass == $user['pass']){
            session_start();
            $_SESSION['simple_login'] = $username;

header("Status: 200 OK");
            header("Location: home.php");
       

            exit();
        }else{


header("Status: 404 Not Found");
     $error = '<div class="alert alert-danger">Invalid Login</div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Meme Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Include stylesheet for better appearance of login form -->
     
    <link href="test.css" rel="stylesheet">
    <style type="text/css">
        body{padding-top:20px;}
    </style>
</head>
<body>
<center><br><br><b><h1><font color="red">Meme Company!</font></h1></b><br>
<h4>is a startup company that brings joy to internet readers by creating funny and realistic memes.<br><br>
Ben is currently the Head of their Programming Team, and he doesn't want his accout to be bruteforce.<br>
Please Do not Bruteforce his password! so the Meme Company will continue to grow.
</center><br><br><br>
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <?php echo $error; ?>
                    <form accept-charset="UTF-8" role="form" method="post" action="index.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="hidden" value="admin">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
<!--footer grep -i "ben"-->
</body>
</html>
