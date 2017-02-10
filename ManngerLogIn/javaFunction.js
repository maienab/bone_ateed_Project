
var Schedule = function(e) {
   
	// hide sutdent form`
	var elem = document.getElementById("AddStudentSpan");
	elem.style.display = 'none';
	//  show Schedule table and Schedule form
    elem = document.getElementById("ScheduleSpan");
	elem.style.display = 'block';		
	fillTable();
	 
};


var load11= function(e){
     var elem = document.getElementById("ScheduleSpan");
   elem.style.display = 'none';
   
    
	var elem = document.getElementById("AddStudentSpan");
	 elem.style.display = 'block';		
   
};




// this function read the text file from tableData and get all the data to create the table
var fillTable= function(){ 
	var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var elem = document.getElementById("myTable");
			elem.innerHTML  = xmlhttp.responseText;
		}
    }
    xmlhttp.open("GET", "tableData.txt", true);
    xmlhttp.send();
};




var loadStudentForm= function(e){
		
	// hide Schedule form and table
	var elem = document.getElementById("ScheduleSpan");
	elem.style.display = 'none';
	//  show studen form
	elem = document.getElementById("AddStudentSpan");
	elem.style.display = 'block';
	
	showListOfStudents();
	
};





var showListOfStudents= function(){

var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var elem = document.getElementById("studentUserTable");
			elem.innerHTML  = xmlhttp.responseText;
		}
    }
    xmlhttp.open("GET", "studentUsersLists.txt", true);
    xmlhttp.send();


	
	
};







