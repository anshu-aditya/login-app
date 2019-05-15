<?php 

$link = mysqli_connect('localhost', 'root', '', 'login_app');

//sanitize input data
function escape($string){
	global $link;
	return mysqli_real_escape_string($link, $string);
}

//run query to databse 
function query($query){
	global $link;
	return mysqli_query($link, $query);
}

//query execution
function confirm($result){
	global $link;
	if(!$result){
		die("query failed" . mysqli_error($link));		
	}
}

//fetch to database
function fetch_array($result){
	global $link;
	return mysqli_fetch_array($result);
}

?>