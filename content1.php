<?php

if(empty($_POST['username'])) {
		echo "A username must be entered. Click here to return to the login screen \n";
		echo "<form action ='http://web.engr.oregonstate.edu/~barnetal/login.php'><input type = 'submit' value ='Go back'</form>";
	}

?>