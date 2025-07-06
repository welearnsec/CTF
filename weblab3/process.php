<?php
	
	if(1){
		$email = 'test@gmail.com';
		$pass = 'pass';
	
		if($_POST['email'] == $email && $_POST['pass'] == $pass){
			
			$flag = 'flag{Sp1dey_is_in_the_bLdG}';

			echo $flag;

		}else{
			echo '0';
		}
	}else{
		echo 'This is a forbidden page.';
	}


?>
