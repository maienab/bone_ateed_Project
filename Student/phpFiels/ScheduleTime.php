<?php
//  this page get the exams schudule 
	require 'core.inc.php';
	require 'connect.inc.php';
//SELECT column1, column2, ...
//FROM table_name
//WHERE condition;
	
// here we select the calssCourse from mysql table and save it an array calld calssCourse	

$result = mysql_query("SELECT calssCourse , timeCourse , courseName , day
FROM  schedule;");
$array = Array();
// here we get the scheukde in seasoan 1
$season1="";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
	$season1=$season1."<tr>";
	$season1=$season1. "<td>".$row['calssCourse']."</td>";
	$season1=$season1. "<td>".$row['timeCourse']."</td>";
	$season1=$season1. "<td>".$row['courseName']."</td>";
	$season1=$season1. "<td>".$row['day']."</td>";
	$season1=$season1."</tr>";
}
ob_end_clean();
echo $season1;
 ?>
	
