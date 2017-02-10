<?php
	
	$temp="";
if (isset($_POST['userName'])&&!empty($_POST['userName'])&&isset($_POST['password'])&&!empty($_POST['password'])){
	echo "haoooooooo";
	$_username= $_POST['userName'];
	$_password= $_POST['password'];		
	$query=" SELECT `stuPassword` FROM `studentuser` WHERE `stuUserName`='$_username'";
		
	if ($qure_run=mysql_query($query)){
		echo "2222222222222222222222";
		$row=mysql_fetch_assoc($qure_run);
		$data=$row['stuPassword'];		
		if ($data=$_password){
			$_SESSION['user_id']=$_username;
			$temp=$_username;
			//header('Location : student.php');
			header('Location: manager.php');
		}
	}
}
	else {			
		echo 'you must enter your user name and password';
	}
?>

<form action="<?php   echo $currentFIle; ?>" method="POST">
  <h1>Mannger Log IN:</h1> 
  <p>
	Username:<br>
	<input type="text" name="userName">
  </p>
  <p>
	Password:<br>
	<input type="password" name="password">
  </p>
  <input type="submit"  value="Login">
</form>