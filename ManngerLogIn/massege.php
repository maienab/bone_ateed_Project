<?php

require 'connect.inc.php';


// this value check if eamil selected
$_stid="";
$_email='no';
if (isset($_POST['Email'])&&!empty($_POST['Email'])){
$_email =$_POST['Email'];
}
// here we check if we want to send to the eamil adress
if ($_email=='email'){
	$_email='yes';
}
else{
	 $_email='no';
}

// this value check if sms selected
$_system='no';
// here we check if we want to send sms
if (isset($_POST['SysteMassege'])&&!empty($_POST['SysteMassege'])){
	$_system=$_POST['SysteMassege'];
}

if ($_system=='system'){
	$_system='yes';
}
else {
	$_system='no';
}

// this value check for how manny student send the massege
$_studentSelect='no';
if (isset($_POST['oneAll'])&&!empty($_POST['oneAll'])){
	$_studentSelect=$_POST['oneAll'];
	echo $_studentSelect;
}
// here we check if we want to send the eamil for one student only 
if ($_studentSelect == 'oneStudent'){
	$_studentSelect='yes';
}
else {
		$_studentSelect='no';
}
// here we get the user id 


$_mailStudent='';
$_UserNameStudent='no';
if ($_studentSelect=='yes'){
		
		$arr2 =(explode(" ",$_POST['taskOption']));
		// here we get the username 
		$_UserNameStudent= $arr2[count($arr2)-1];
		// here we select the mail from the table
		$sql = "SELECT mail ,userName FROM student_users WHERE idNum='$_UserNameStudent' ";
		$result = mysql_query( $sql, $conn );
	
		if(!$result ){die('Could not get data: ' . mysql_error());}// end die if
 
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			
			$_mailStudent = $row['mail'];
			$_stid= $row['userName']."_message";
		
			}
}

// here we check if we have one student and we select the opthion to send mail 
if ($_studentSelect=='yes' && 	$_email=='yes'){
$to      = $_mailStudent;
$subject = $_POST['subject'];
$message = $_POST['myTextarea'];
$headers = 'From: boneated@gmail.com' . "\r\n" .
    'Reply-To: boneated@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
echo "massege send";
}




// here we send mail to all student . 
$_mailStudent="";
if ($_studentSelect=='no' && 	$_email=='yes'){
echo "ertetertererttrer";
	$sql = "SELECT mail FROM student_users ";
		$result = mysql_query( $sql, $conn );
		
		if(!$result ){die('Could not get data: ' . mysql_error());}// end die if
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){						
			$_mailStudent .= $row['mail']." , ";
			}
			
// here we set the detals about the mail 			



	//	$arr2 =(explode(" ",$_POST['taskOption']));
		// here we get the username 
		//$_UserNameStudent= $arr2[count($arr2)-1];
$to=(explode(",",$_mailStudent));
echo $to[1];

$subject = $_POST['subject'];
$message = $_POST['myTextarea'];
$headers = 'From: boneated@gmail.com' . "\r\n" .
    'Reply-To: boneated@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

for ($x = 0; $x <= count($to); $x++) {
    mail($to[$x], $subject, $message, $headers);;
} 

echo "massege send sucsuflly ";
}

// this value check if send message to system1 selected
$_system='no';
if (isset($_POST['SysteMassege'])&&!empty($_POST['SysteMassege'])){
	$_system =$_POST['SysteMassege'];
	if($_system=='system')
		$_system='yes';
	else 
		$_system='no';
}


// here we check if want to send message to seystem for one student only 
if ($_studentSelect=='yes' && $_system=='yes'){
	$_date=date("Y/m/d");
	$_time = date("G:i:s");
	$subject=$_POST['subject'];
	$myTextarea=$_POST['myTextarea'];
// here we create the query
	$query = "INSERT INTO $_stid ( date, time,subject,text)
	VALUES ('$_date' , '$_time','$subject','$myTextarea')";
	
	echo $query;
	
   $retval = mysql_query( $sql, $conn );
   
	$retval = mysql_query( $query, $conn );
	if(!$retval ){
		echo "fffffffffffffffffffffffffffffffff";
		 die('Could not get data: ' . mysql_error());
	}// end die if
}


if ($_studentSelect=='no' && $_system=='yes'){
	echo "fffffffffffffffffffffffffff"."<br>";
	$sql = "SELECT userName FROM student_users ";
		$result = mysql_query( $sql, $conn );
		
		if(!$result ){die('Could not get data: ' . mysql_error());}// end die if
	
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_stid=$row['userName']."_message";
			$_date=date("Y/m/d");
			$_time = date("G:i:s");
			$subject=$_POST['subject'];
			$myTextarea=$_POST['myTextarea'];
			// here we create the query
			$query = "INSERT INTO $_stid ( date, time,subject,text)
			VALUES ('$_date' , '$_time','$subject','$myTextarea')";
			$retval = mysql_query( $query, $conn );
		}
	


	
}







?> 