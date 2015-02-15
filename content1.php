<?php
session_start();

if (isset($_POST['username']) && !empty($_POST['username']) && session_status() == PHP_SESSION_ACTIVE) {
		$_SESSION['username'] = $_POST['username'];
		if(!isset($_SESSION['visits'])) {
			$_SESSION['visits'] = -1;
		}
}

if(isset($_SESSION['username']) && session_status() == PHP_SESSION_ACTIVE) {
		$_SESSION['visits']++;
		
		echo "Hello $_SESSION[username]. You have visited this page $_SESSION[visits] times before.<br/>";

		echo "Click ";
		echo "<a href=http://web.engr.oregonstate.edu/~barnetal/login.php?logout=1>here</a>";
		echo " to logout.<br/>";
	
		echo "<br/>";

		echo "Click ";
		echo "<a href=http://web.engr.oregonstate.edu/~barnetal/content2.php>here</a>";
		echo " to go to content2.php.<br/>";
}
else{
		echo "A username must be entered. Click ";
		echo "<a href=http://web.engr.oregonstate.edu/~barnetal/login.php>here</a>";
		echo " to return to the login screen.<br/>";
}
?>

