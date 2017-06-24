<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	// Check if we have parameters w1 and w2 being passed to the script through the URL

	$q = $_GET['clicked_id'];
	$Tblname=$q."_marks";
	
	$sql = "SELECT 	courseName , courseMark FROM ". $Tblname;
	echo $sql;
	$result = mysql_query($sql, $conn);

	if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
$tbl="";
while ($row = mysql_fetch_assoc($result)) {
	$tbl=$tbl."<tr>";
	$tbl=$tbl. "<td>".$row['courseMark']."</td>";
	$tbl=$tbl. "<td>".$row['courseName']."</td>";
	$tbl=$tbl."</tr>";
}

	
	if ($tbl==""){ // check if table is empty 
		$tbl=$tbl."<tr><td>the table is empty</td></tr>";
	}
	ob_end_clean();
	echo $tbl;
 ?>
  
  