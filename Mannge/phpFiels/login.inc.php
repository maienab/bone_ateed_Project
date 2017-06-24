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
		echo '';
	}
?>



















<html>
<head>
	<link href="loginStyle.css" rel="stylesheet" />
    </head>

<body>

<center><h2>manager Login Form</h2></center>
<form action="<?php   echo $currentFIle; ?>" method="POST" id="loginForm">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="userName" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

















