<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	require 'loadStudentListIntoText.inc.php';
	require 'loadScheduleTable.inc.php';
	echo '<a href="logout.php">log out</a>';	
?>

<html lang="he">
<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type = "text/javascript" src = "javaFunction.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="Schedule()"  >מערכת שעות</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">סטודנטים<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"   onclick="loadStudentForm()" >הוסף סטודנט</a></li>
          <li><a href="#">רשימת סטודנטים</a></li>
        </ul>
      </li>
      <li><a href="#"   onclick="load11()">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
 
	</ul>
	<ul class="nav navbar-nav navbar-left">
      <li><a href="#">מנהל</a></li>
	</ul>
  </div>
</nav>
  
  
<div class="container">
	<span id="ScheduleSpan"   style="display:none;>
		<div class="row1">
			
			<div class="col-sm-8"> <table class="table table-bordered">
				<h3>מערכת שעות</h3>
				<br></br>
				<thead>
					<tr>
						<th>כיתה</th>
						<th>שעה</th>		        
						<th>שם קורס</th>
						<th>יום</th>
					</tr>
				</thead>
					<tbody id="myTable"></tbody>
				</table>
			</div><!-- for col 8sm-->
	
			
			<div class="col-sm-4">
				<form action="scheduleTableForm.php" method="POST">
					<h3>הכנס קורס למערכת שעות</h3> 
					<p>
					יום<br>
					<input type="text" name="dayCourse">
					<br> 
					שם קורס 
					<br>
					<input type="text" name="coruseName">
					<br>
					שעה
					<br>
					<input type="text" name="timeCourse">
					<br>
					כיתה
					<br>
					<input type="text" name="coruseClass">
					<br>
					
					</p>
					<p>
					<input type="submit" name="ADD" value="add"/>
					<input type="submit" name="Delete" value="delete"/>
				</form>
			</div><!-- for col 4sm-->
		</div><!--fro row-->
		
	</span>
	
	<span id="AddStudentSpan"   style="display:none;>
		<div class="row2">
			<div class="col-sm-8"> <table class="table table-bordered">
				<h3>רשימת הסטודנטים</h3>
				<br></br>
				<thead>
					<tr>
						<th>password</th>
						<th>user name</th>
						<th>eamil</th>
						<th>טלפון</th>
						<th>תז</th>		        
						<th>שם משפחה</th>
						<th>שם פרטי</th>
					</tr>
				</thead>
					<tbody id="studentUserTable"></tbody>
				</table>
			</div><!-- for col 8sm-->
				
				<div class="col-sm-4">
					<form action="studentUsers.php" method="POST">
						<h3>הוסף סטודנט חדש</h3> 
						<p>
						user name<br>
						<input type="text" name="userName">
						<br> 
						password
						<br>
						<input type="text" name="pass">
						<br>
						שם פרטי
						<br>
						<input type="text" name="FirstName">
						<br>
						שם משפחה
						<br>
						<input type="text" name="LastName">
						<br>
						תז
						<br>
						<input type="text" name="idNum">
						<br>
						email
						<br>
						<input type="text" name="studentMail">
						<br>
						פלאפון
						<br>
						<input type="text" name="studentphone">
						<br>
						</p>
						<p>
						<input type="submit" name="studentAdd" value="add student"/>
					</form>
				</div> 
			</div>
		</span>
</div>  <!--div class="container">-->

</body>
</html>
