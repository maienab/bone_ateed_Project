<?php
// here we select the day from mysql table and save it an array calld dayArray	
$result = mysql_query("SELECT day FROM  schedule");
$dayArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $dayArray[] =  $row['day'];	
}
	

// here we select the courseName from mysql table and save it an array calld courseName	
$result = mysql_query("SELECT courseName FROM  schedule");
$courseNameArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $courseNameArray[] =  $row['courseName'];	
}
	
// here we select the timeCourse from mysql table and save it an array calld timeCourse	
$result = mysql_query("SELECT timeCourse FROM  schedule");
$timeCourseArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $timeCourseArray[] =  $row['timeCourse'];	
}
	

// here we select the calssCourse from mysql table and save it an array calld calssCourse	
$result = mysql_query("SELECT calssCourse FROM  schedule");
$calssCourseArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $calssCourseArray[] =  $row['calssCourse'];	
}
	
	

// here we make the schedule table  and print the result in file
file_put_contents("tableData.txt", "");
$lengthArray= count($calssCourseArray);
for ($i = 0; $i <$lengthArray; $i++) {
$inputToText="<tr><td>".$calssCourseArray[$i]."</td><td>".$timeCourseArray[$i]."</td><td>".$courseNameArray[$i]."</td><td>".$dayArray[$i]."</td></tr>";
	$myfile = file_put_contents("tableData.txt", $inputToText.PHP_EOL , FILE_APPEND | LOCK_EX);
} 	



?>