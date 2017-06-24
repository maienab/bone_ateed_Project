<?php


// here we select the user name from mysql table and save it an array calld userNameArray	
$result = mysql_query("SELECT userName FROM  student_users");
$userNameArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $userNameArray[] =  $row['userName'];	
}
	

// here we select the password from mysql table and save it an array calld passwordArray	
$result = mysql_query("SELECT password FROM  student_users");
$passwordArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $passwordArray[] =  $row['password'];	
}
	
// here we select the name from mysql table and save it an array calld firstNameArray	
$result = mysql_query("SELECT firstName FROM  student_users");
$firstNameArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $firstNameArray[] =  $row['firstName'];	
}
	

// here we select the lastname from mysql table and save it an array calld lastNameArray	
$result = mysql_query("SELECT lastName FROM  student_users");
$lastNameArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $lastNameArray[] =  $row['lastName'];	
}


// here we select the id from mysql table and save it an array calld idNumArray	
$result = mysql_query("SELECT idNum FROM  student_users");
$idNumArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $idNumArray[] =  $row['idNum'];	
}
	
// here we select the mail from mysql table and save it an array calld mailArray	
$result = mysql_query("SELECT mail FROM  student_users");
$mailArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $mailArray[] =  $row['mail'];	
}
	
	
// here we select the phone from mysql table and save it an array calld phoneArray	
$result = mysql_query("SELECT phone FROM  student_users");
$phoneArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $phoneArray[] =  $row['phone'];	
}


// here we write to the file
$myfile = fopen("studentUsersLists.txt", "w") or die("Unable to open file!");
$result=count($phoneArray);
for($i=0 ; $i<$result ; $i++){
	  
$txt = "<tr><td>'$passwordArray[$i]'</td><td>'$userNameArray[$i]'</td><td>'$mailArray[$i]'</td><td>'$phoneArray[$i]'</td><td>'$idNumArray[$i]'</td><td>'$lastNameArray[$i]'</td><td>'$firstNameArray[$i]'</td><td><button class='btn btn-danger' type='button' id='$userNameArray[$i]' onClick=deleteStudent(this.id)>"."delete student"."</button>
</td></tr>\n";
fwrite($myfile, $txt);
}

fclose($myfile);



?>