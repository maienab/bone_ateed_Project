
<?php

		$name=$_POST['name'];
		$phone=$_POST['phone'];
		
		

// this page get the exams greads table for the student
	require 'connect.inc.php';
	// here we start the session to get the user name id 
	session_start();
	$_username=$_SESSION['login_user'];
	// here we make the sql query 
	
		ob_end_clean();

	$subj="Consulting";
	$text="name : ".$name."   phone number :".$phone;
	$time=date("h:i:sa");
	$date=date("Y/m/d");

	$_username=$name;
	$uname=$name;;



$sql = "INSERT INTO inboxfromstudent ".
       "(userName,name, time , date , subject , text) ".
       "VALUES ".
       "('$_username','$uname','$time','$date','$subj','$text')";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "thank you \n we got your personal deatils\n we will repaly you as fast we can  ";
mysql_close($conn);


	
?>