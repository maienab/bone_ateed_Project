<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	// here we select the calssCourse from mysql table and save it an array calld calssCourse	

$result = mysql_query("SELECT userName , firstName , lastName , idNum 
FROM   student_users;");
$array = Array();
// here we get the scheukde in seasoan 2
$season1="";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 

	
	$season1=$season1."<tr>";
	$season1=$season1."<td><button  type='button'  class='btn btn-primary' id=".$row['userName']." onClick=reply_click(this.id)>"."הצג ציוניים"."</button></td>";
	$season1=$season1. "<td>".$row['userName']."</td>";
	$season1=$season1. "<td>".$row['idNum']."</td>";
	$season1=$season1. "<td>".$row['lastName']."</td>";
	$season1=$season1. "<td>".$row['firstName']."</td>";
	$season1=$season1."</tr>";
}
ob_end_clean();
echo $season1;
?>