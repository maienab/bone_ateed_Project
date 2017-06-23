<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	
	$q = $_GET['clicked_id'];
	ob_end_clean();
	
	$tblName=$q."_pays";
	
	$sql = "SELECT * FROM ". $tblName;
	$result = mysql_query($sql, $conn);

	if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
$tbl="";
$pay=0;
$dept=0;
while ($row = mysql_fetch_assoc($result)) {
	$tbl=$tbl."<tr>";
	$tbl=$tbl. "<td>".$row['details']."</td>";
	$tbl=$tbl. "<td>".$row['date']."</td>";
	
	if ($row['plusMunis']=="munis"){
	$tbl=$tbl. "<td>"."-".$row['amout']."</td>";
	$dept+=$row['amout'];
	$tbl=$tbl. "<td>"." "."</td>";
	
	}
	else {
		$tbl=$tbl. "<td>".$row['amout']."</td>";
		$pay+=$row['amout'];
		$tbl=$tbl. "<td>".$row['typePays']."</td>";

	}
	$tbl=$tbl."</tr>";
	
}
	echo $tbl;
echo "total pays = ".$pay."<br>";
echo "total dept = -".$dept."<br>";
echo "Outstanding balance = ";
echo $pay-$dept;
?>
