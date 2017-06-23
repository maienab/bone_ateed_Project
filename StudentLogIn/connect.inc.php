<?php

$host='localhost';
$user='root';
$pass='';
$database = 'loginstudent';

$conn = @mysql_connect($host,$user,$pass);

if (!$conn){
	die('not__connected_server!!');
}

	$connData=@mysql_select_db ($database);
	
	if(!$connData){
	die('not__connected_dataBase!!');
		
	} 
else{
	echo('connected!!');
}

?>