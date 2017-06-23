<?php
//  this page get the exams schudule 
	require 'core.inc.php';
	require 'connect.inc.php';
	
	//SELECT column1, column2, ...
	//FROM table_name
	//WHERE condition;
	// here we select the calssCourse from mysql table and save it an array calld calssCourse	
	
	// table name 
	/*
  <div class="panel panel-info">
      <div class="panel-heading">Panel with panel-info class</div>
      <div class="panel-body">Panel Content</div>
    </div>
	*/
$result = mysql_query("SELECT id ,userName,name, date , time , subject , text
FROM    inboxfromstudent  
 order by date DESC, time DESC;");
$array = Array();
// here we get the scheukde in seasoan 1
$tbl="";
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
	/*$tbl=$tbl."<div class="." inboxBack "."> Date : ";
	$tbl=$tbl."".$row['date']."<br>time :";
	$tbl=$tbl. "".$row['time']."<br> From : ";
	$tbl=$tbl."".$row['name']."<br>User name: ";
	$tbl=$tbl."".$row['userName']."<br> <h3>";
	$tbl=$tbl. "".$row['subject']."</h3><br>";
	$tbl=$tbl. "".$row['text']."<br><br>";
	$tbl=$tbl. "<button id=".$row['id']."". " onclick= "." DeleteInbox(this.id) ".">delete</button></div><!--inboxBack--->";*/

	$tbl=$tbl."<div class='panel panel-info'>
      <div class='panel-heading'> subject: ".$row['subject']."</div>
      <div    style='background-color:#c2d6d6;'  class='panel-body'>";
	$tbl=$tbl."Date : ";
	$tbl=$tbl."".$row['date']." || time :";
	$tbl=$tbl. "".$row['time']."<br> From : ";
	$tbl=$tbl."".$row['name']."<br>User name: ";
	$tbl=$tbl."".$row['userName']."<br>";
	$tbl=$tbl. ""."<br>";
	$tbl=$tbl. "".$row['text']."<br><br>";
	$tbl=$tbl. "<button type='button' class='btn btn-danger' id=".$row['id']."". " onclick= "." DeleteInbox(this.id) ".">delete</button></div>
	  
	  </div>
    ";
	
	}


ob_end_clean();
echo $tbl;

?>
	
