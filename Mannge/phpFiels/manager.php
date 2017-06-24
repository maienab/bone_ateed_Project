<?php
require 'core.inc.php';
require 'connect.inc.php';
if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){	
	header('Location: student.php');
	}
else {
	include 'login.inc.php';
	}
?>
