<?php

if(empty($_POST['username'])) {
		echo "A username must be entered. Click ";
		echo "<a href=http://web.engr.oregonstate.edu/~barnetal/login.php>here</a>";
		echo " to return to the login screen.\n";
	}

if(!empty($_POST['username'])) {
	session_start();

	if(session_status() == PHP_SESSION_ACTIVE) {
		if(isset($_POST['username'])) {
			$_SESSION['username'] = $_POST['username'];
		}
		if(!isset($_SESSION['visits'])) {
			$_SESSION['visits'] = 0;
		}
		
		$_SESSION['visits']++;
		
		echo "Hello $_SESSION[username]. You have visited this page $_SESSION[visits] times before.\n";

		echo "Click ";
		echo "<a href=http://web.engr.oregonstate.edu/~barnetal/login.php?logout=1>here</a>";
		echo " to logout.\n";
	}
}
?>