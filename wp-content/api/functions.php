<?php

//-- SETTINGS
ini_set("display_errors", 0);

//-- SIMPLY VAR
foreach($_POST as $key => $val){ $$key = $val; }
foreach($_GET as $key => $val){ $$key = $val; }

//-- FUNCTIONS
function outputMessage($success, $datas) {
	$return = new stdClass;
	$return->success = $success;

	foreach ($datas as $key => $value) {
		$return->$key = $value;
	}
	
	/*if(!$success) {
		http_response_code(401);
	}*/

	echo json_encode($return);
	exit();
}

?>