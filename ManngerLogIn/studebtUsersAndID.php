<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	// here we select the calssCourse from mysql table and save it an array calld calssCourse	

$result = mysql_query("SELECT firstName , lastName , idNum 
FROM   student_users;" );
if (!$result)
{
	echo "fffffffffffffffffffffffffffffffffffffffffffffffffffffff";
}
// here we get the scheukde in seasoan 2
$season1="";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
	$season1=$season1.$row['firstName']." ".$row['lastName']." ".$row['idNum'].",";
	}
ob_end_clean();
echo $season1;
?>