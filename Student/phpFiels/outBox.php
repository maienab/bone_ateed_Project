
<?php

// this page get the exams greads table for the student
	require 'connect.inc.php';
	// here we start the session to get the user name id 
	session_start();
	$_username=$_SESSION['login_user'];
	// here we make the sql query 
	
		ob_end_clean();

	$subj="";
	$text="";
	$time=date("h:i:sa");
	$date=date("Y/m/d");
	if (isset($_POST['subject'])&&!empty($_POST['subject'])&&isset($_POST['mText'])&&!empty($_POST['mText'])){
		$subj= $_POST['subject'];
		$text=$_POST['mText'];
		}

/*

	$sql="SELECT userName
FROM   student_users 
 WHERE userName =".$_username."; " ;
*/
$sql="SELECT firstName , lastName
FROM   student_users 
 WHERE userName ='maien3'" ;
 
$result = mysql_query($sql , $conn);
if(! $result )
{
  die('Could not create database: ' . mysql_error());
}
// here we get the scheukde in seasoan 1
$uname="";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 	
$uname=$row['firstName']." ".$row['lastName'];
}




$sql = "INSERT INTO inboxfromstudent ".
       "(userName,name, time , date , subject , text) ".
       "VALUES ".
       "('$_username','$uname','$time','$date','$subj','$text')";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "your Message sends successfully\n";
mysql_close($conn);


	
?>