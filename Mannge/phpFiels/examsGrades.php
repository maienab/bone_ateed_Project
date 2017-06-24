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
	$_lecturerName="";
	if (isset($_POST['lecturerName'])&&!empty($_POST['lecturerName'])){
		$_lecturerName= $_POST['lecturerName'];
		echo $_lecturerName;
	}

	// here we get the time 
	$_time="";
	
	if (isset($_POST['time'])&&!empty($_POST['time'])){
		$_time= $_POST['time'];
		echo $_time;
	}
	
	// here we get the date
	$_date="";

	
	if (isset($_POST['date'])&&!empty($_POST['date'])){
		$_date= $_POST['date'];
		echo $_date;
	}
// here we get the class numbre 
	$_classNum="";
	
	if (isset($_POST['classNum'])&&!empty($_POST['classNum'])){
		$_classNum= $_POST['classNum'];
		echo $_classNum;
	}
	
	
	// here we get the Season of the exam
	$_examSeason="";
	if (isset($_POST['examSeason'])&&!empty($_POST['examSeason'])){
		$_examSeason= $_POST['examSeason'];
		echo $_examSeason;
	}
	
	
	// here we check if we clicked the add button
	$_add_or_delete="";
	if (isset($_POST['ADD'])&&!empty($_POST['ADD'])){
		$_add_or_delete= $_POST['ADD'];
	}
	
	// here we check if we clicked the delete butoon
	if (isset($_POST['Delete'])&&!empty($_POST['Delete'])){
		$_add_or_delete= $_POST['Delete'];
	}
	
	if ($_add_or_delete=="delete"){
		$delSql = "DELETE FROM exam_schedule WHERE (name='$_name'   AND lecturer ='$_lecturerName'AND time ='$_time'AND date ='$_date'AND class ='$_classNum'AND Season ='$_examSeason')" ;
		$retval = mysql_query( $delSql, $conn );
			if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("course Deleted successfully . refresh the page to see the change")';
			echo '</script>';	
			echo "deleted data successfully\n";		  	}
	
	
	if ($_add_or_delete=="add"){
		$query = "INSERT INTO  exam_schedule ( name, lecturer,time,date,class,Season)
		VALUES ('$_name' , '$_lecturerName','$_time','$_date',$_classNum, $_examSeason)";
		$retval = mysql_query( $query, $conn );
		if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert("course Add successfully . refresh the page to see the change")';
			echo '</script>';
			echo "Entered data successfully\n";		  
	}
	
	
	
?>