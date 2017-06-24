<?php
//  this page get the exams schudule 
	require 'core.inc.php';
	require 'connect.inc.php';
	//SELECT column1, column2, ...
	//FROM table_name
	//WHERE condition;
	// here we select the calssCourse from mysql table and save it an array calld calssCourse	
	
	// table name 
	echo $_GET['name'];
	$id=$_GET['name'];
	
	
	
	
	$delSql = "DELETE FROM inboxfromstudent WHERE id = '$id'" ;
		$retval = mysql_query( $delSql, $conn );
			if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("Massege Deleted successfully . refresh the page to see the change")';
			echo '</script>';	
		ob_end_clean();
		echo "deleted data successfully\n";		  	
	
	
?>
	
