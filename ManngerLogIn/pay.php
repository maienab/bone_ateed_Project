<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	
		
if (isset($_POST['stuName'])&&!empty($_POST['stuName'])
	&&isset($_POST['date'])&&!empty($_POST['date'])
	&&isset($_POST['amont'])&&!empty($_POST['amont'])
	&&isset($_POST['text'])&&!empty($_POST['text'])
	&&isset($_POST['typePays'])&&!empty($_POST['typePays'])){
	
	
		$tblName=$_POST['stuName']."_pays";
		$date=$_POST['date'];
		$typePay= $_POST['typePays'];
		$amount= $_POST['amont'];
		$deatils= $_POST['text'];
		
		$query = "INSERT INTO  ".$tblName." ( typePays,date,amout,details,plusMunis)
		VALUES ('$typePay','$date' , '$amount','$deatils','plus')";
		$retval = mysql_query( $query, $conn );
		if(! $retval ){die('Could not enter data: ' . mysql_error());}
			echo '<script language="javascript">';
			echo 'alert(" Add successfully . refresh the page to see the change")';
			echo '</script>';
			echo "Entered data successfully\n";		  


	}


 ?>