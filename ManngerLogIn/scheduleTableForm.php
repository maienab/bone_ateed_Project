<?php

	require 'core.inc.php';
	require 'connect.inc.php';
 // here we get the input from the form to add or delete courseName	
if (isset($_POST['dayCourse'])&&!empty($_POST['dayCourse'])&&isset($_POST['coruseName'])&&!empty($_POST['coruseName'])  
&&isset($_POST['timeCourse'])&&!empty($_POST['timeCourse'])&&isset($_POST['coruseClass'])&&!empty($_POST['coruseClass'])){

	$_day=$_POST['dayCourse'];
	$_coruseName=$_POST['coruseName'];
	$_timeCourse=$_POST['timeCourse'];
	$_coruseClass=$_POST['coruseClass'];
	
		// here we cheek if we want to enter a coruse at the schedule
	  if (isset($_POST['ADD'])) {
		$query = "INSERT INTO schedule (day, courseName, timeCourse,calssCourse)
		VALUES ('$_day', '$_coruseName','$_timeCourse','$_coruseClass')";
		$retval = mysql_query( $query, $conn );
			if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("course Add successfully . refresh the page to see the change")';
			echo '</script>';
			echo "Entered data successfully\n";		  
	  }

	  // here we cheeck if we want to delete a course from schedule
	  if (isset($_POST['Delete'])) {		  
		$delSql = "DELETE FROM schedule WHERE (day='$_day'   AND courseName ='$_coruseName'AND timeCourse ='$_timeCourse'AND calssCourse ='$_coruseClass')" ;
		$retval = mysql_query( $delSql, $conn );
			if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("course Deleted successfully . refresh the page to see the change")';
			echo '</script>';	
			echo "deleted data successfully\n";		  
		} // end of first if 
	
	
	}
?>
	
