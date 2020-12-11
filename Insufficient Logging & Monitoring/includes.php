<?php 
function logger($log){
	if(!file_exists('log.txt',)){
		file_put_contents("log.txt", "");
	}

	$userIP = $_SERVER['REMOTE_ADDR']; //Ip van gebruiker
	date_default_timezone_set("Europe/Amsterdam");
	$time = date("["."m/d/y h:iA".']',time());

	$contents = file_get_contents('log.txt');
	$contents .= "$userIP\t$time\t$log\r";

	file_put_contents('log.txt', $contents);
}
 ?>