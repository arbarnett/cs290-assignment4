<?php

echo "You are at content 2";
session_start();

if ((session_status() == PHP_SESSION_ACTIVE) && isset($_SESSION['username'])){
	echo "Click ";
	echo "<a href=http://web.engr.oregonstate.edu/~barnetal/content1.php>here</a>";
	echo " to go to content1.php.\n";

} else {
	echo "A username must be entered. Click ";
	echo "<a href=http://web.engr.oregonstate.edu/~barnetal/login.php>here</a>";
	echo " to return to the login screen.\n";
}
?>