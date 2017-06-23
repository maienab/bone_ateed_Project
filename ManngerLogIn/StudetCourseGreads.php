<?php
	// this page add and remove exam_schedule from the table
	
	require 'core.inc.php';
	require 'connect.inc.php';

	
	// here we get the name of the cousre
	$_name="";
	if (isset($_POST['courseName'])&&!empty($_POST['courseName'])){
		$_name= $_POST['courseName'];
		echo $_name;
	}

	// here we getthe name of the lecturerName
	$_gread="";
	if (isset($_POST['gread'])&&!empty($_POST['gread'])){
		$_gread= $_POST['gread'];
		echo $_gread;
	}

	
	$stuname="";
	if (isset($_POST['stuname'])&&!empty($_POST['stuname'])){
		$stuname= $_POST['stuname'];
	}
	
	
		$stuname=$stuname."_marks";
		echo $stuname;


	// here we check if we clicked the add button
	$_add_or_delete="";
	if (isset($_POST['ADD'])&&!empty($_POST['ADD'])){
		$_add_or_delete= $_POST['ADD'];
	}
	
	// here we check if we clicked the delete butoon
	if (isset($_POST['Delete'])&&!empty($_POST['Delete'])){
		$_add_or_delete= $_POST['Delete'];
	}
	
	echo $_add_or_delete;
		
	if ($_add_or_delete=="delete"){
		$delSql = "DELETE FROM  ".$stuname. " WHERE (courseName='$_name'   AND courseMark ='$_gread')" ;
		$retval = mysql_query( $delSql, $conn );
			if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("course Deleted successfully . refresh the page to see the change")';
			echo '</script>';	
			echo "deleted data successfully\n";		  	}
	
	

	
	
	if ($_add_or_delete=="add"){
		$query = "INSERT INTO  ".$stuname. " ( courseName	, 	courseMark)
		VALUES ('$_name' , '$_gread')";
		
		echo $query;
		$retval = mysql_query( $query, $conn );
		if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("course greads Add successfully . refresh the page to see the change")';
			echo '</script>';
			echo "Entered data successfully\n";
	
	}
	
?>