<!DOCTYPE html>
<html>
 <form id='login' action='content1.php' method='POST' accept-charset='UTF-8'>
 <fieldset>
 <legend>Login</legend>
 <input type='hidden' name='submitted' id='submitted' value='1'/>

 <label for='username'> UserName:</label>
 <input type='text' name='username' id='username' maxlength='50'/>

 <input type='submit' name='Submit' value='Submit'/>

 </fieldset>
 </form>
 </html>
 <?php
 if($_GET['logout'] == 1) {
 	$_SESSION = array();
 	session_destroy();
 	echo "Session destroyed";
 	die();
 }
 ?>