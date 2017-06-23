<?php
	require 'connect.inc.php';

	$usrName=$_GET['name'];
				 
		 
		 $sql = "DELETE FROM student_users WHERE (userName='$usrName')";
		echo $sql;
		$retval = mysql_query( $sql, $conn );
         if(! $retval ) {
            die('Could not delete table: ' . mysql_error());
         }
		 

		
		
		
		
	
	$tblName1=$_GET['name']."_marks";
	$tblName2=$_GET['name']."_message";
	$tblName3=$_GET['name']."_pays";
	
	
	
	    $sql = "DROP TABLE IF EXISTS $tblName1";
         $retval = mysql_query( $sql, $conn );
         if(! $retval ) {
            die('Could not delete table: ' . mysql_error());
         }
		 
		 $sql = "DROP TABLE $tblName2";
         $retval = mysql_query( $sql, $conn );
         if(! $retval ) {
            die('Could not delete table: ' . mysql_error());
         }
		 
		 $sql = "DROP TABLE $tblName3";
         $retval = mysql_query( $sql, $conn );
         if(! $retval ) {
            die('Could not delete table: ' . mysql_error());
         }
		 
		
		 

        echo "Table deleted successfully\n";

 ?>