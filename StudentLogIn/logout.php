<?php
	require 'core.inc.php';
	session_destroy();
	header('Location: login.inc.php');
   
?>