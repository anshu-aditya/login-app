<?php

/***************** helper functions **********************/
//clean input
function clean($string){
	return htmlentities($string);
}

//redirect header
function redirect($location){
	return header("Location: {$location}");
}

//set session to grab message
function set_message($message){
	if (!empty($message)) {
		$_SESSION['message'] = $message;
	}
}else{
	$message = "";
}

//display session message
function display_message(){
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

//token generator 
function token_generator(){
	$token = $_SESSION['message'] = md5(uniqid(rand(),true));
	return $token;
}

/***************** validation functions **********************/

?>