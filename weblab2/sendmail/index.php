<style> 


p.test2 {
    width: 300px; 
    border: 1px ;
    word-break: break-all;
}
</style>
<?php
    $error = "";
    if(isset($_POST['email'],$_POST['password'])){
 
        /*** You can change username & password ***/
        $user = array(
                        "user" => "secretemail@gmail.com",
                        "pass"=>"password"          
                );
        $username = $_POST['email'];
        $pass = $_POST['password'];
        if($username == $user['user'] && $pass == $user['pass']){
            session_start();
            $_SESSION['simple_login'] = $username;

header("Status: 200 OK");
         $error = '<div class="alert alert-success"><p class="test2">U0drZ2FtOW9iaUJEWlc1aExDQnBJR3AxYzNRZ2RISmhibVpsY2lBa01UQXdNREFnZEc4Z2VXOTFjaUJoWTJOdmRXNTBJR1p5YjIwZ2RHaGxJR052YlhCaGJua3VJRkJzWldGelpTQmtiMjUwSUhSbGJHd2dZVzU1YjI1bENpQm1iR0ZuZTJsZmJHOTJaVjlqWVhSOQ==</div></p>';


           
        }else{



     $error = '<div class="alert alert-danger">Invalid Email</div>';

         header("HTTP/1.1 404 Not Found");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cattus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     

     
    <link href="../bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{padding-top:20px;}
    </style>
</head>



<body>
<center><br><br><b><h1><font color="red">Send Mail!</font></h1></b><br>
<img src="../email/mail.png">
</center><br><br><br>


    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Enter Email to Retrieve the message</h3>
                </div>
                <div class="panel-body">
                    <?php echo $error; ?>
                    <form accept-charset="UTF-8" role="form" method="post" action="index.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control"  name="email" type="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="hidden" value="password">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
