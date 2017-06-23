
var Schedule = function(e) {
	// hide id spans
	hideAllSpans();
	//  show Schedule table and Schedule form
    elem = document.getElementById("ScheduleSpan");
	elem.style.display = 'block';		
	fillTable();
		 
};

var load11= function(e){
	// hide id spans
	hideAllSpans();
	
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
	// hide id spans
	hideAllSpans();
	//  show studen form
	elem = document.getElementById("StudentList");
	elem.style.display = 'block';
	
	showListOfStudents();
	
};


var studentAdd= function(e){
	// hide id spans
	hideAllSpans();
	//  show studen form
	elem = document.getElementById("AddStudentSpan");
	elem.style.display = 'block';
	
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


var sendMassege= function(e){
	// hide id spans
	hideAllSpans();
	//show massege container
	 elem = document.getElementById("MassegeSpan");
	elem.style.display = 'block';	
	
	
	$.get('studebtUsersAndID.php', function(data) {
    
	entryArray = data.split(",");
	
	var x = document.getElementById("sel1");
    var option = document.createElement("option");
    option.text ="select your student from the list" ;
    x.add(option);
	
	
	for (i = 0; i < entryArray.length; i++) { 
    
	
	
	var x = document.getElementById("sel1");
    var option = document.createElement("option");
    option.text = entryArray[i] ;
    x.add(option);
	
	
}
	
	});
	
	
	
	
};


var selectStuden= function(e){
		  
//console.log(e.options[e.selectedIndex].value);
// get the inpt from select
var x=	e.options[e.selectedIndex].value;
console.log(x);

if (x=="allStudent"){
// hide student feild
var elem = document.getElementById("userNameStudentField");
elem.style.display = 'none';
}

// show studied input feild
if (x=="oneStudent"){
	elem = document.getElementById("userNameStudentField");
	elem.style.display = 'block';	
}
};



// function to show the grades table time 
var examsTbl= function(e){	
	// hide id spans
	hideAllSpans();
   
	//  show Schedule exam form 
	var elem =document.getElementById("ExamSchedule");
	elem.style.display = 'block';	
	
	// here we get the data from php and insert it in the html page
	$.get('examsScheduleSeason1.php', function(data) {
    document.getElementById('season1').innerHTML = data;});
	$.get('examsScheduleSeason2.php', function(data) {
    document.getElementById('season2').innerHTML = data;});
	$.get('examsScheduleSeason3.php', function(data) {
    document.getElementById('season3').innerHTML = data; });
};










// function to show the grades table time 
var gradesTbl= function(e){	
	// hide id spans
	hideAllSpans();
   // hide  Schedule courses
	var elem = document.getElementById("studentGreads");
	elem.style.display = 'block'; 
   
   
   	$.get('StudensGreads.php', function(data) {
    document.getElementById('studentGresdTableBody').innerHTML = data;});
   
   
   $('#thetable').find('tr').click( function(){
  var row = $(this).find('td:first').text();
  alert('You clicked ' + row);
});
};




// this function get the button that we click to show the greads of the student that we choise 

function reply_click(clicked_id)
{	
	// hide id spans
	hideAllSpans();
   // show list grads of students
   var elem = document.getElementById("ListGrads");
	elem.style.display = 'block'; 
			 	document.getElementById("myRadio").value=clicked_id;   

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log( this.responseText);
             document.getElementById('listGrdsStu').innerHTML = this.responseText;

			}
        };

        xmlhttp.open("GET","studentGreadsList.php?clicked_id="+clicked_id,true);
        xmlhttp.send();
	};// reply_click





var hideAllSpans= function(){
	
	
	//hide MassegeSpan form`
	var elem = document.getElementById("MassegeSpan");
	elem.style.display = 'none';
	// hide sutdent form`
	var elem = document.getElementById("AddStudentSpan");
	elem.style.display = 'none';
	// hide  Schedule courses
	var elem = document.getElementById("ScheduleSpan");
	elem.style.display = 'none'; 
	// hide  Schedule courses
	var elem = document.getElementById("ExamSchedule");
	elem.style.display = 'none'; 
   
   // hide list grads of students
   var elem = document.getElementById("ListGrads");
	elem.style.display = 'none'; 
	// hide list grads of students
   var elem = document.getElementById("studentGreads");
	elem.style.display = 'none'; 
   var elem = document.getElementById("inboxSpan");
	elem.style.display = 'none'; 
	//hide MassegeSpan form`
	var elem = document.getElementById("paysTablesSpan");
	elem.style.display = 'none';
	//hide MassegeSpan form`
	var elem = document.getElementById("DeptSpan");
	elem.style.display = 'none';
	//hide MassegeSpan form`
	var elem = document.getElementById("StudentpaySpan");
	elem.style.display = 'none';
	//hide MassegeSpan form`
	var elem = document.getElementById("paySpan");
	elem.style.display = 'none';
	
	elem = document.getElementById("AddStudentSpan");
	elem.style.display = 'none';
	
	elem = document.getElementById("StudentList");
	elem.style.display = 'none';
	
	
	elem = document.getElementById("welcom");
	elem.style.display = 'none';
	
	
	
	
};

var jsfunction= function(){
	alert ("ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff,mmm");
};



var inbox= function(){
	hideAllSpans();
	var elem = document.getElementById("inboxSpan");
	elem.style.display = 'block'; 
	
		$.get('inboxFromSt.php', function(data) {
    document.getElementById('inboxDiv').innerHTML = data;});
	};


var DeleteInbox= function(id){
	window.location.href = "deleteInbox.php?name=" + id; 
	
	};

var pay= function(id){
hideAllSpans();
var elem = document.getElementById("paySpan");
	elem.style.display = 'block'; 
		$.get('payPage.php', function(data) {
    document.getElementById('paysTbl').innerHTML = data;});
	
	
	};




var ShowStudentPays= function(id){
	hideAllSpans();
	var elem = document.getElementById("StudentpaySpan");
	elem.style.display = 'block'; 
	$('input[name="stuName"]').val(id);

	};

	
	
	
	
	

var addDept= function(id){
	hideAllSpans();
	var elem = document.getElementById("DeptSpan");
	elem.style.display = 'block'; 
$('input[name="stuName"]').val(id);


	
};



	
	
	
	

var PaysTabels= function(id){

hideAllSpans();
var elem = document.getElementById("paysTablesSpan");
	elem.style.display = 'block'; 



    if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log( this.responseText);
             document.getElementById('paysTblSpan').innerHTML = this.responseText;

			 
			}
        };

        xmlhttp.open("GET","PaysStudentTbelsS.php?clicked_id="+id,true);
        xmlhttp.send();	

};



var validate= function(form){


        return confirm('Do you really want to do this?');
    
};





var deleteStudent= function(id){
	var result = confirm("Want to delete?");
if (result) {
	window.location.href = "deleteStudent.php?name=" + id; 
}
	
	
	
};