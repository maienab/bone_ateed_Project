
<?php

// this page get the exams greads table for the student
	require 'connect.inc.php';
	// here we start the session to get the user name id 
	session_start();
	$tblName=$_SESSION['login_user']."_marks";
	// here we make the sql query 
	$result = mysql_query("SELECT courseName , courseMark
	FROM " .$tblName. " ;");
	$array = Array();
	// here we get the scheukde in seasoan 1
	$tbl="";
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
		$tbl=$tbl."<tr>";
		$tbl=$tbl. "<td>".$row['courseMark']."</td>";
		$tbl=$tbl. "<td>".$row['courseName']."</td>";
		$tbl=$tbl."</tr>";
	}
	ob_end_clean();
	echo $tbl;
	
?>