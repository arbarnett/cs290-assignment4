<!-- This file should accept either a GET or POST for input. 
That GET or POST will have an unknown number of key/value pairs. 
The page should return a JSON object 
(remember, this is almost identical to an object literal in JavaScript) 
of the form {"Type":"[GET|POST]","parameters":{"key1":"value1", ... ,"keyn":"valuen"}}. 
Behavior if a key is passed in and no value is specified is undefined. 
If no key value pairs are passed it it should return {"Type":"[GET|POST]", "parameters":null}. 
You are welcome to use built in JSON function in PHP to produce this output. -->
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$postArray = array(
		"Type" => "POST",
		"parameters" => $_POST
	);

	echo json_encode($postArray);
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
	$getArray = array(
		"Type" => "GET",
		"parameters" => $_GET

	);	

	echo json_encode($getArray);
}
?>