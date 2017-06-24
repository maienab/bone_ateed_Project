<?php

	$temp="";
if (isset($_POST['userName'])&&!empty($_POST['userName'])&&isset($_POST['password'])&&!empty($_POST['password'])){
	echo "hereeeeee";
	$_username= $_POST['userName'];
	$_password= $_POST['password'];		
	
	echo $_username;
	echo $_password;
	
	 $query = mysql_query("SELECT userName FROM student_users WHERE userName='$_username' and password='$_password'");
     if (mysql_num_rows($query) != 0)
    {
         $_SESSION['login_user'] = $_username;

     echo "<script language='javascript' type='text/javascript'> location.href='homePage.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
	
	
	}
	else {			
		echo 'you must enter your user name and password';
	}
?>
<html>
<head>
	<link href="loginStyle.css" rel="stylesheet" />
    </head>

<body>

<center><h2>Student Login Form</h2></center>
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





