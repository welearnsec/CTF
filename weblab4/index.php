<?php
    $error = "";
    if(isset($_POST['username'],$_POST['password'],$_POST['usertype'])){
 
        /*** You can change username & password ***/
        $user = array(
                        "user" => "user1",
                        "pass"=>"user1",
			"usertype"=>"user"	    
                );
        $username = $_POST['username'];
        $pass = $_POST['password'];
	$usertype = $_POST['usertype'];

        if($username == $user['user'] && $pass == $user['pass'] && $usertype == $user['usertype']){
            session_start();
            $_SESSION['simple_login'] = $username;
	    $_SESSION['usertype'] = $usertype;

	    header("Status: 200 OK");
            header("Location: home.php");
       	    

            exit();
	}elseif($username == $user['user'] && $pass == $user['pass'] && $usertype == 'admin'){

	 session_start();
            $_SESSION['simple_login'] = $username;
	    $_SESSION['usertype'] = $usertype;

	    header("Status: 200 OK");
            header("Location: home.php");
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
    <title>BrainFuck</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Include stylesheet for better appearance of login form -->
     
    <link href="test.css" rel="stylesheet">
    <style type="text/css">
        body{padding-top:20px;}
	.imgcontainer {
	    text-align: center;
	    margin: 24px 0 12px 0;
	}

	img.avatar {
	    width: 40%;
	    border-radius: 50%;
	}
    </style>
</head>
<body>
<center>
	<p><b>Kim</b> is an Employee of "BrainFuck" company, he wants to steal a secret code from <b>Leonard the "Admin"</b>.<br>
	You are the hacker! Please help <b>Kim</b> to <i>steal the secret code!</i>.
	</p>
</center><br>


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title"><center>Login</center></h3>
				<div class="imgcontainer">
					<img src="img_avatar2.png" alt="Avatar" class="avatar">
				</div>
				<div class="panel-body">
					<?php echo $error; ?>
					<form accept-charset="UTF-8" role="form" method="post" action="index.php">
					<fieldset>
					<div class="form-group">
					<input class="form-control" placeholder="Username" name="username" type="text" value="">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Password" name="password" type="password" value="">
					<input name="usertype" type="hidden" value="user">
				</div>
					<input class="btn btn2 btn-block" type="submit" value="Login">
				</fieldset>
					</form>
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>
