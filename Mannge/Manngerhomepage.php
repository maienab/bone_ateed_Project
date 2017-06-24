
<!--mannger home page --->


<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	require 'loadStudentListIntoText.inc.php';
	require 'loadScheduleTable.inc.php';
?>

<html lang="he">
<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style.css" rel="stylesheet" />
  <script type = "text/javascript" src = "javaFunction.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

</head>
<body  >

<div class = "title" > Future Builders College <br>מכללת בוני העתיד</div>


<div class = "imagediv">
  <img src="logo1.png"height="130" width="150" align="right"  >
</div>
<!--      ----------------------------------------------------------nav bar --->
<nav class="navbar ">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
	   <li><a href="#" onclick="pay()"  > שכ"ל</a></li>
      <li><a href="#" onclick="Schedule()"  >מערכת שעות</a></li>
    
    


	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">בחינות<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"   onclick="examsTbl()"   >לוח בחינות</a></li>
          <li><a href="#"   onclick="gradesTbl()"  >ציוניים</a></li>
        </ul>
      </li>
 
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">סטודנטים<span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" onclick="studentAdd()" >הוסף סטודנט</a></li>
          <li><a href="#" onclick="loadStudentForm()" >רשימת סטודנטים</a></li>
        </ul>
      </li>
	
	  
    
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">הודעות	<span class="glyphicon glyphicon-envelope"></span> 
<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" onclick="inbox()" >דואר נכנס</a></li>
          <li><a href="#"   onclick="sendMassege()">שלח הודעה</a></li>
        </ul>
      </li>
 
	</ul>
	<ul class="nav navbar-nav navbar-left">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> log out</a></li>
	  <li><a href="#" >מנהל</a></li>
	</ul>
  </div>
</nav>
<!-- End  -------------------------------------------------------------------------------------nav bar --->
  
  
<div class="container">
	<!--  Schedule form---------------------------------------------------------------------------------->
	<span id="ScheduleSpan"   style="display:none;>
		<div class="row1">
			
			<div class="col-sm-8"  > 
			<table class="table table-striped"><br><br>
				<center><h3>מערכת שעות</h3></center>
				<br></br>
				<thead style="background-color: #f5f5ef;"  ><tr>
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
				<form action="scheduleTableForm.php" method="POST"  onsubmit="return validate(this);">
					<br><br>
					<center><h3>הוסף קורס למערכת שעות</h3> </center><br><br>
						<div class="input-group">
						<span class="input-group-addon">יום</span>
						<input style="background-color: #ffffe6;" type="text" class="form-control" name="dayCourse" placeholder="יום">
						</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">שם הקורס</span>
						<input style="background-color: #ffffe6;"  type="text" class="form-control" name="coruseName" placeholder="שם הקורס">
						</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-clock-o">שעה</i></span>
						<input style="background-color: #ffffe6;" type="time" class="form-control" name="timeCourse" placeholder="שעה">
						</div>	
					<br>
					<div class="input-group">
						<span class="input-group-addon">כיתה</span>
						<input style="background-color: #ffffe6;"  type="text" class="form-control" name="coruseClass" placeholder="כיתה">
						</div>
					</p>
					<p><br>
					  <button type="submit" name="ADD" value="add" class="botn1 btn btn-primary" >Add</button><br><br>
					  <button type="submit" name="Delete" value="delete" class="botn1 btn btn-danger">Delete</button>

					  
				</form>
			
			</div><!-- for col 4sm-->
		</div><!--fro row-->
	</span>
	<!--  End ---------------------------------------------Schedule form--->
	
	
	

	<!--  Add student form--------------------------------------------------->
	<span id="StudentList"   style="display:none;>
		<div class="row2">
			<div class="col-sm-2"> </div>
			<div class="col-sm-8"> <table class="table table-striped">
				<br><br>
				<center><h3>רשימת הסטודנטים</h3></center>
				<br></br>
				<thead style="background-color: #f5f5ef;">
					<tr>
						<th>סיסמה</th>
						<th>שם משתמש</th>
						<th>דואר אלקטרוני</th>
						<th>טלפון</th>
						<th>ת"ז</th>		        
						<th>שם משפחה</th>
						<th>שם פרטי</th>
						<th>הסר סטודנט</th>
						
					</tr>
				</thead>
					<tbody id="studentUserTable"></tbody>
				</table>
			</div><!-- for col 8sm-->
			</div>
			</span>


	
	<!--  Add student form--------------------------------------------------->
	<span id="AddStudentSpan"   style="display:none;>
		<div class="row2">
				<div class="col-sm-3"  ></div>
		<div class="col-sm-6"    align="right">
				<form action="studentUsers.php" method="POST" onsubmit="return validate(this);">
					<br><br>
					<center><h3>הוסף סטודנט חדש</h3></center><br>
					<div class="input-group">
						<span class="input-group-addon">user name</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="userName" placeholder="user name">
						</div><br><br>
					<div class="input-group">
						<span class="input-group-addon">password</span>
						<input style="background-color: #ffffe6;" type="text" class="form-control" name="pass" placeholder="password">
						</div>	
					<br><br><div class="input-group">
						<span class="input-group-addon">שם פרטי</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="FirstName" placeholder="שם פרטי">
						</div>	
					<br><br><div class="input-group">
						<span class="input-group-addon">שם משפחה</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="LastName" placeholder="שם משפחה">
						</div>	
					<br><br><div class="input-group">
						<span class="input-group-addon">ת"ז</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="idNum" placeholder="ת''ז">
						</div>
						<br><br><div class="input-group">
						<span class="input-group-addon">Mail</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="studentMail" placeholder="Mail">
						</div>	
						<br><br><div class="input-group">
						<span class="input-group-addon">פלאפון</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="studentphone" placeholder="פלאפון">
						</div>	
					<br>						
						</p>
						<p>
						<button type="submit" name="studentAdd" value="add student" class="botn1 btn btn-primary" >Add</button><br><br>					
					</form>
				</div> 
			</div>
		</span>
		<!--  End add student form------------------------------------------------------------>
		
		<!-- massege - form--------------------------------------------->
		<span id="MassegeSpan"   style="display:none;><!--start span -->
			<div class="row3"><!--row3 div-->
				<br><br><center><h3>דואר יוצא</h3></center>
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<form action="massege.php" method="POST"  onsubmit="return validate(this);">
				
				<div class="input-group">
						<span  class="input-group-addon">From:</span>
						<input  style="background-color: #ffffe6;"type="text" class="form-control" name="from" value="מכללת בוני העתיד">
						</div><br><br>
				
				<label>To:</label>
				<br>
				<select style="background-color: #ffffe6;" class="form-control" name="oneAll"onchange="selectStuden(this);">
				<option value="oneStudent">סטודנט אחד</option>				
				<option value="allStudent">כל הסטודנטים</option>
				</select>
				<br>
				
				<div >
				<span id="userNameStudentField">
				<!--insert student UserName:<br>
				<input type="text" name="To" >
				<br>-->
				<div class="form-group">
				<label for="sel1">Select list (select one):</label>
				<select style="background-color: #ffffe6;" class="form-control" id="sel1" name="taskOption">
				</select>
				
				<br>
				</div>
				</span>
				</div>
				
				<label >send to :</label><br>
				<input type="checkbox" name="Email"  value="email"> שלח למייל פרטי<br>
				<input type="checkbox" name="SysteMassege" value="system" >  שלח בתחנת מידע<br>
				<br>
				 <div class="input-group">
						<span  class="input-group-addon">Subject:</span>
						<input style="background-color: #ffffe6;" type="text" class="form-control" name="subject" placeholder="נושא">
						</div><br><br>
				
				
				<br><br>
				
				<label >message</label><br>

				<textarea style="background-color: #ffffe6;" class="form-control" rows="5" name="myTextarea" rows="4" cols="50">
				</textarea>

				<br><br>
			
						<button type="submit" value="Submit" class="botn1 btn btn-primary" >שלח</button><br><br>					
				</form> 
				</div>
				
			</div><!--end row 3 div-->
		</span><!---end span->
		<!-- END  massege - form--------------------------------------------->

		<!-- greads time - form--------------------------------------------->
		<span id="ExamSchedule"   style="display:none;><!--start span -->
			<div class="row4">
				<div class="col-sm-2"></div>

			<div class="col-sm-6">
				<!-- season 1 table------------------------------------------->
				<br><br><br><div style="text-align: center;    font-size:36px;;">מועד א<br></div> 	
				<table class="table table-striped">
				<thead style="background-color: #f5f5ef;" >
				<tr>
					<th>שם הקורס</th>
					<th>שם המרצה</th>
					<th>שעה</th>
					<th>תאריך</th>
					<th>כיתה</th>
					<th>מועד</th>
				</tr>
				</thead>
				<tbody id="season1"></tbody>
				</table>
				<br><br><br>	
				<!-- season 2 table------------------------------------------->
				<div style="text-align: center; font-size:36px;;"> מועד ב<br></div> 
				<table class="table table-striped">
				<thead style="background-color: #f5f5ef;">
				<tr>
					<th>שם הקורס</th>
					<th>שם המרצה</th>
					<th>שעה</th>
					<th>תאריך</th>
					<th>כיתה</th>
					<th>מועד</th>
				</tr>
				</thead>
				<tbody id="season2"></tbody>
				</table>
				<!-- season 3 table------------------------------------------->
				<br><div style="text-align: center;    font-size:36px;;">מועד ג<br></div> 
				<table class="table table-striped">
				<thead style="background-color: #f5f5ef;" >
				<tr>
						<th>שם הקורס</th>
						<th>שם המרצה</th>
						<th>שעה</th>
						<th>תאריך</th>
						<th>כיתה</th>
						<th>מועד</th>
				</tr>
				</thead>
				<tbody id="season3"></tbody>
				</table>
			
			</div>				
				
				<div class="col-sm-1" ></div>		
				<div class="col-sm-2" >		

					<br><br><br><center><h3>הוסף ללוח בחינות</h3></center>
					<form action="examsGrades.php" method="POST"  onsubmit="return validate(this);">
						<br>					
						
						<div class="input-group">
						<span class="input-group-addon">שם הקורס</span>
						<input style="background-color: #ffffe6;" type="text" class="form-control" name="courseName" placeholder="שם הקורס">
						</div>
						<br>
						<div class="input-group">
						<span class="input-group-addon">שם המרצה</span>
						<input style="background-color: #ffffe6;" type="text" class="form-control" name="lecturerName" placeholder="שם המרצה">
						</div>
						<br>
						
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-clock-o"></i>שעה</span>
						<input  style="background-color: #ffffe6;" type="time" class="form-control" name="time" placeholder="שעה">
						</div>
						<br>
						
						
						<div class="input-group">
						<span class="input-group-addon">תאריך</span>
						<input  style="background-color: #ffffe6;" type="date" class="form-control" name="date" placeholder="תאריך">
						</div>
						<br>
						
						<div class="input-group">
						<span class="input-group-addon">מספר כיתה</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="classNum" placeholder="מספר כיתה">
						</div>
						<br>
						
						מועד
						<br>
      
						<select style="background-color: #ffffe6;" class="form-control" name="examSeason">
							<option value="1">א</option>
							<option value="2">ב</option>
							<option value="3">ג</option>
						</select>
						<br><br>
						
						<button type="submit" name="ADD" value="add" class="botn1 btn btn-primary" >Add</button><br><br>
					  <button type="submit" name="Delete" value="delete" class="botn1 btn btn-danger">Delete</button>
					  </form> 
				</div>
								<div class="col-sm-1" ></div>		

			</div> <!--end row 4-------->
		</span><!---end span->
		<!-- END  grades time` - form--------------------------------------------->
		
		<!-- studentGreads - schudele--------------------------------------------->
		<span id="studentGreads"   style="display:none;><!--start span -->
		<div class="row5"><!--row3 div-->	
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
				<br><br><center><h3>רשימת הציוניים<h3></center>
			 	<table class="table table-striped">
				<thead style="background-color: #f5f5ef;">
				<tr>
					<th>הצג ציוניים</th>
					<th>שם משתמש</th>
					<th>ת"ז</th>
					<th>שם משפחה</th>
					<th>שם פרטי</th>
				</tr>
				</thead>
				<tbody id="studentGresdTableBody"></tbody>
				</table>
				</div>
		</div><!--end row 5 div-->
		</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
		
			<!-- studentGreads - schudele--------------------------------------------->
		<span id="ListGrads"   style="display:none;><!--start span -->
		<div class="row6"><!--row3 div-->	
				
				<div class="col-sm-2" >	</div>
				<div class="col-sm-5" >		
					<br><br>
				<br><br><center><h3>ציוניים</h3></center>
					<table class="table table-striped">
					<thead>
					<tr>
						<th>ציון</th>
						<th>שם הקורס</th>
					</tr>
					</thead>
					<tbody id="listGrdsStu"></tbody>
					</table>
				</div>
						<div class="col-sm-1" ></div>
				<div class="col-sm-2" ><br><br><br>
				<br><center><h3>הוסף ציון חדש </h3></center>
				
				<br><br><form name="formGreadd" action="StudetCourseGreads.php" method="POST" onsubmit="return validate(this);" >
						
						<center><input type="radio" name="stuname" value="" id="myRadio"   checked> Student</center>					
						<br>
						
					
						<div class="input-group">
						<span class="input-group-addon">שם הקורס</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="courseName" placeholder="שם הקורס">
						</div><br><br>
					
					
						<div class="input-group">
						<span class="input-group-addon">ציון</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="gread" placeholder="ציון">
						</div><br><br>
						
						<button type="submit" name="ADD" value="add" class="botn1 btn btn-primary" >Add</button><br><br>
						<button type="submit" name="Delete" value="delete" class="botn1 btn btn-danger">Delete</button>
					</form> 
				</div>
		
		</div><!--end row 6 div-->
		</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
	
			<!-- studentGreads - schudele--------------------------------------------->
		<span id="inboxSpan"   style="display:none;><!--start span -->
		<div class="row7"><!--row3 div-->	
				<div class="col-sm-1" ></div>
				<div class="col-sm-10" >	
					<br><br><center><h3> דואר נכנס</h3></center>
					<span id ="inboxDiv">	</span>						
				</div>
		
		</div><!--end row 6 div-->
		</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
		
		
		
		
		
	<span id="paySpan"   style="display:none;><!--start span -->
	<div class="row8"><!--row3 div-->	
		<br><br><center><h3> שכר לימוד </h3></center>
		<div class="col-sm-2" ></div>	
		<div class="col-sm-8" >	
		<table class="table table-striped">
			<thead     style="background-color: #f5f5ef;">
			<tr>
			<th>שם</th>
			<th>ת"ז</th>
			<th>שם משתמש</th>
			<th>הצג כרטסת</th>
			<th>שלם</th>
			<th>הוסף חוב</th>
			</tr>
			</thead>
			<tbody id="paysTbl"></tbody>
		</table>		
		</div>
	</div><!--end row 6 div-->
	</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
	
		<span id="StudentpaySpan"   style="display:none;><!--start span -->
		<div class="row8"><!--row3 div-->	
				<center><h3> שכר לימוד </h3></center>
				<center><h3>"תשלום חוב"</h3></center>
				<div class="col-sm-3" ></div>
				<div class="col-sm-6" >
				<form action="pay.php" method="POST" onsubmit="return validate(this);" >
					
					
					<div class="input-group">
						<span class="input-group-addon">student user Name:</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="stuName">
						</div><br><br>
					
					<div class="input-group">
						<span class="input-group-addon">תאריך :</span>
						<input  style="background-color: #ffffe6;" type="date" class="form-control" name="date" placeholder="תאריך">
					</div><br><br>
					
					<div class="form-group">
						<label for="sel1">שלם באמצעות :</label>
						<select class="form-control" name="typePays" style="background-color: #ffffe6;" >
							<option value="cash">מזומן</option>
							<option value="visa">כרטיס אשראי</option>
							<option value="chik">שיק</option>
						</select>
					</div>
					
					<div class="input-group">
						<span class="input-group-addon">סכום-ש"ח</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="amont" placeholder="סכום"><br>
					</div><br><br>
				
					<div class="form-group">
						<label for="comment">פרטים נוספים :</label>
						<textarea class="form-control" style="background-color: #ffffe6;" rows="5" name="text"></textarea>
					</div>
					<button type="submit" class="botn1 btn btn-primary" >submit</button><br><br>
					</form>
				</div>
		</div><!--end row 6 div-->
		</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
		
			
	<span id="DeptSpan"   style="display:none;><!--start span -->
	<div class="row8"><!--row3 div-->	
		<center><h3>שכר לימוד</h3></center>
		<center><h3> הוסף חוב עבור סטודנט</h3></center>
		<div class="col-sm-3" ></div>
		
		<div class="col-sm-6" >	
				<form action="dept.php"  method="POST" onsubmit="return validate(this);">
						<div class="input-group">
						<span class="input-group-addon">student user Name:</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="stuName">
						</div><br><br>
					<div class="input-group">
						<span class="input-group-addon">תאריך :</span>
						<input  style="background-color: #ffffe6;" type="date" class="form-control" name="date" placeholder="תאריך">
					</div><br><br>
					<div class="input-group">
						<span class="input-group-addon">סכום-ש"ח</span>
						<input  style="background-color: #ffffe6;" type="text" class="form-control" name="amont" placeholder="סכום"><br>
					</div><br><br>
						<div class="form-group">
						<label for="comment">פרטים נוספים :</label>
						<textarea class="form-control" style="background-color: #ffffe6;" rows="5" name="text"></textarea>
					</div>
					<button type="submit" class="botn1 btn btn-primary" >submit</button><br><br>
				</form>
		</div>
	</div><!--end row 6 div-->
	</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
		
		
		
		
		
		
		
		
		
		
				
	<span id="paysTablesSpan"   style="display:none;><!--start span -->
	<div class="row8"><!--row3 div-->	
		<center><h3> כרטסת כספית</h3></center>
		<div class="col-sm-2" ></div>
		<div class="col-sm-8" >
		<table class="table table-striped">
			<thead>
			<tr>
			<th>פרטים</th>
			<th>תאריך</th>
			<th>סכום</th>
			<th>אמצעי תשלום</th>
			</tr>
			</thead>
			<tbody id="paysTblSpan"></tbody>
		</table>				
		</div>
	</div><!--end row 6 div-->
	</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
		
	
	<span id="welcom"><!--start span -->
		<center>
			<br><br><h3>ברוכים הבאים למכללת בוני העתיד <h3>
			<h3>נא לבחור בתפריט הראשי על מנת<h3>
			<h3>לקבל את המידע הנדרש<h3>
		</center>
	</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->

		
		
		
		
		
	<span><!--start span -->
		<div class="row9"><!--row3 div-->	
		<div class="col-sm-12" >				
		<div class = "contactUS">
		<center>Contact Us</center>
		<p class="rit" > טלפון : 02-1234567&nbsp <i class="fa fa-phone fa-2x" ></i></p><br>
		<p class="lft">כתובת : היסמין 32, אבוגוש&nbsp  <i class="fa fa-map-marker fa-2x" ></i></p><br>
		<p class="rit">boneated@gmail.com&nbsp <i class="fa fa-envelope fa-2x" ></i></p><br>
		<p class="lft">מיקוד : 90845&nbsp <i class="fa fa-area-chart fa-2x" ></i> </p><br>
	</div>
		</div>
	</div><!--end row 6 div-->
	
	</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->

		
		
		
		
		

		
		
		
		</div>  <!--div class="container">-->


		
	

</body>
</html>
