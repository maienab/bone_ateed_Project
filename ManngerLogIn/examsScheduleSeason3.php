<?php
//  this page get the exams schudule 
	require 'core.inc.php';
	require 'connect.inc.php';
//SELECT column1, column2, ...
//FROM table_name
//WHERE condition;
	
// here we select the calssCourse from mysql table and save it an array calld calssCourse	

$result = mysql_query("SELECT name , lecturer , time , date , class , Season
FROM   exam_schedule
WHERE Season = '3' 
ORDER BY date ;");
$array = Array();
// here we get the scheukde in seasoan 3
$season1="";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
	$season1=$season1."<tr>";
	$season1=$season1. "<td>".$row['name']."</td>";
    $season1=$season1. "<td>".$row['lecturer']."</td>";
	$season1=$season1. "<td>".$row['time']."</td>";
	$season1=$season1. "<td>".$row['date']."</td>";
	$season1=$season1. "<td>".$row['class']."</td>";
	$season1=$season1. "<td>".$row['Season']."</td>";
	$season1=$season1."</tr>";
}
ob_end_clean();
echo $season1;
 ?>
	
