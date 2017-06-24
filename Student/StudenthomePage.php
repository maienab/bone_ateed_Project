<?php

	
session_start();
?>

<html lang="he">
<head >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet" />
  <script type = "text/javascript" src = "javaFunction.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class = "title" > Future Builders College <br>מכללת בוני העתיד</div>


<div class = "imagediv">
  <img src="images\logo1.png"height="130" width="150" align="right"  >
</div>



<!--      ----------------------------------------------------------nav bar --->
<nav class="navbar">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
     	 <li><a href="#" onclick="pay()"  >שכ"ל</a></li>

	 <li><a href="#" onclick="Schedule()"  >מערכת שעות</a></li>
     
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">בחינות<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"   onclick="examSchudle()"   >לוח בחינות</a></li>
          <li><a href="#"   onclick="Greads()"  >גליון ציוניים </a></li>
        </ul>
      </li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">הודעות<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"   onclick="inbox()"   >דואר נכנס</a></li>
          <li><a href="#"   onclick="sendMassege()">שלח הודעה</a></li>
        </ul>
      </li>
 
	</ul>
	<ul class="nav navbar-nav navbar-left">
	      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> log out</a></li>
      <li><a href="#">סטודנט</a></li>
	</ul>
  </div>
</nav>
<!-- End  -------------------------------------------------------------------------------------nav bar --->
  
  
<div class="container">
	<!--  Add greads tbl form--------------------------------------------------->
	<span id="GreadsTable"   style="display:none;>
		<div class="row2">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			<table class="table table-striped">
				<center><h3>גליון ציוניים</h3></center>
				<hr><hr>
				<br></br>
				<thead>
					<tr>
						<th>ציון</th>
						<th>שם הקורס</th>
					</tr>
				</thead>
					<tbody id="GreadsTbl"></tbody>
					
				</table>
			</div><!-- for col 8sm-->
				
		</div>
	</span>
		<!--  End add greads tbl form------------------------------------------------------------>
	<!-- greads time - form--------------------------------------------->
		<span id="examScude"   style="display:none;><!--start span -->
			<div class="row4">
				<div class="col-sm-3"> </div>
				<div class="col-sm-6">
				<center><h1>לוח הבחינות</h1></center>
				<hr><hr>
				
				<!-- season 1 table------------------------------------------->
				<div style="text-align: center;    font-size:36px;;">מועד א<br><br></div> 	
				<table class="table table-striped">
				<thead>
				<tr>
					<th>מועד</th>
					<th>שעה</th>
					<th>תאריך</th>
					<th>כיתה</th>
					<th>שם המרצה</th>
					<th>שם הקורס</th>
				</tr>
				</thead>
				<tbody id="season1"></tbody>
				</table>
				<br><br><br>	
				<!-- season 2 table------------------------------------------->
				<div style="text-align: center; font-size:36px;;"> מועד ב<br><br></div> 
				<table class="table table-striped">
				<thead>
				<tr>
					<th>מועד</th>
					<th>שעה</th>
					<th>תאריך</th>
					<th>כיתה</th>
					<th>שם המרצה</th>
					<th>שם הקורס</th>
				</tr>
				</thead>
				<tbody id="season2"></tbody>
				</table>
				<!-- season 3 table------------------------------------------->
				<div style="text-align: center;    font-size:36px;;">מועד ג<br><br></div> 
				<table class="table table-striped">
				<thead>
				<tr>
					<th>מועד</th>
					<th>שעה</th>
					<th>תאריך</th>
					<th>כיתה</th>
					<th>שם המרצה</th>
					<th>שם הקורס</th>
				</tr>
				</thead>
				<tbody id="season3"></tbody>
				</table>
			
			</div>				
			</div> <!--end row 4-------->
		</span><!---end span->
		<!-- END  grades time` - form--------------------------------------------->
		<!--  Schedule form---------------------------------------------------------------------------------->
	<span id="ScheduleSpan"   style="display:none;>
		<div class="row1">
			<div class="col-sm-2"> </div>
			<div class="col-sm-8"> 
			<table class="table table-striped">
				<center><h3>מערכת שעות</h3></center>
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
			</div><!-- for col 12sm-->
		</div><!--fro row-->
	</span>
	<!--  End ---------------------------------------------Schedule form--->
		<!--  Schedule form---------------------------------------------------------------------------------->
	<span id="InboxSpan"   style="display:none;>
		<div class="row1">
			<div class="col-sm-1"> </div>
			<div class="col-sm-10"> 
			
			<center><h1>דואר נכנס</h1></center>
			<hr><hr>
			<span id ="inboxDiv">	</span>		
		</div><!-- for col 12sm-->
		</div><!--fro row-->
	</span>
	<!--  End ---------------------------------------------Schedule form--->
		<!--  Schedule form---------------------------------------------------------------------------------->
	<span id="outBoxSpan"   style="display:none;>
		<div class="row1">
		
			<div class="col-sm-2"> 	</div>
			<div class="col-sm-8"> 	
			<center><h1>מערכת פניות</h1></center><hr><hr>
			<form action="outBox.php"  method="POST">
				<fieldset>
				<div class ="formMas">
				<center><h1>שלח פניה למערכת</h1></center>
				<legend>פרטים:</legend>
				
				<label>שם משתמש : <?php echo $_SESSION['login_user']; ?></label><br>
				
				<br>
				<div class="input-group">
						<span class="input-group-addon">נושא </span>
						<input style="background-color: #ffffe6;" type="text" class="form-control" name="subject" placeholder="נושא">
				</div>
				<br><br>
				<label >תוכן </label><br>

				<textarea style="background-color: #ffffe6;" class="form-control" rows="5" name="myTextarea" rows="4" cols="50">
				</textarea>

				<br><br>
			
				<br><br>
				<button type="submit" value="Submit" class="botn1 btn btn-primary" >שלח</button><br><br>					
				</div>
				</fieldset>
			</form> 
			</div><!-- for col 12sm-->
		</div><!--fro row-->
	</span>
	<!--  End ---------------------------------------------Schedule form--->
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<span id="welcom"><!--start span -->
		<center>
			<br><br><h3>ברוכים הבאים למכללת בוני העתיד <h3>
			<h3>נא לבחור בתפריט הראשי על מנת<h3>
			<h3>לקבל את המידע הנדרש<h3>
		</center>
	</span><!---end span->
		<!-- END  studentGreads - schudele--------------------------------------------->
		
		
		
		
		
		
		<!--  Schedule form---------------------------------------------------------------------------------->
	<span id="paysSpan"   style="display:none;>
		<div class="row1">
			<div class="col-sm-2"> </div>	
			<div class="col-sm-8"> 	
			<center><h1>כרטסת כספית עבור סטודנט</h1></center><br><br>	
			<table class="table table-striped">
			<thead>
			<tr>
			<th>פרטים</th>
			<th>תאריך</th>
			<th>סכום</th>
			<th>אמצעי תשלום</th>
			</tr>
			</thead>
			<tbody id="paysTblSpan">
			</tbody>
			
		</table>				
		
			</div><!-- for col 12sm-->
		</div><!--fro row-->
	</span>
	<!--  End ---------------------------------------------Schedule form--->
	
		
		
		
		
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
