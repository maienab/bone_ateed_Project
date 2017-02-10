<?php
	require 'core.inc.php';
	require 'connect.inc.php';

// here we get the data fro mthe form add student and update the data base 	
	if (isset($_POST['userName'])&&!empty($_POST['userName']) &&isset($_POST['pass'])&&!empty($_POST['pass']) &&isset($_POST['FirstName'])&&!empty($_POST['FirstName'])  &&isset($_POST['LastName'])&&!empty($_POST['LastName']) &&isset($_POST['idNum'])&&!empty($_POST['idNum'])     &&isset($_POST['studentMail'])&&!empty($_POST['studentMail'])&&isset($_POST['studentphone'])&&!empty($_POST['studentphone'])    ){
	
	
	// here we save all the data that we get from the user and save it in parmetrs
	$_name=$_POST['userName'];
	$_pass=$_POST['pass'];
	$_firstName=$_POST['FirstName'];
	$_lastName=$_POST['LastName'];
	$_id=$_POST['idNum'];		
	$_mailStudent=$_POST['studentMail'];
	$_phone=$_POST['studentphone'];


// here we select the query  to update the data  base table	
		$query = "INSERT INTO student_users (userName, password, firstName,	lastName,idNum,mail,phone)
		VALUES ('$_name', '$_pass','$_firstName','$_lastName','$_id','$_mailStudent','$_phone')";
		$retval = mysql_query( $query, $conn );
			if(! $retval ){	
				echo '<script language="javascript">';
				echo 'alert("sorry cannot oinsert the data . change your userName")';
				echo '</script>';		
				die('Could not enter data: ' . mysql_error());
			}
			
			

	$_tableName=$_name."_marks";
			
			// sql to create table
	// here we create a greads table for the new student that we add 
	$sql = "CREATE TABLE $_tableName (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	courseName VARCHAR(30),
	courseMark int(30))";

	if (mysql_query( $sql, $conn )=== TRUE) {
		echo "Table MyGuests created successfully";
	} 
	else {
    echo "Error creating table: " . $conn->error;
	}
			
	echo '<script language="javascript">';
	echo 'alert("student created successfully . refresh the page to see the change")';
	echo '</script>';
	
	
	
	}
		
		

?>