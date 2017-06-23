
// function to show the grades table time 
var Greads= function(e){	
	// hide id spans
   hideSpan();
	//  show Schedule exam form 
	var elem =document.getElementById("GreadsTable");
	elem.style.display = 'block';	
	
	// here we get the data from php and insert it in the html page
	$.get('greads.php', function(data) {
    document.getElementById('GreadsTbl').innerHTML = data;
	});
};

// function to show the grades table time 
var examSchudle= function(e){	
	// hide id spans
      hideSpan();

	//  show Schedule exam form 
	var elem =document.getElementById("examScude");
	elem.style.display = 'block';	
	
	// here we get the data from php and insert it in the html page
	$.get('examsScheduleSeason1.php', function(data) {
    document.getElementById('season1').innerHTML = data;
	});// here we get the data from php and insert it in the html page
	$.get('examsScheduleSeason2.php', function(data) {
    document.getElementById('season2').innerHTML = data;
	});// here we get the data from php and insert it in the html page
	$.get('examsScheduleSeason3.php', function(data) {
    document.getElementById('season3').innerHTML = data;
	});
};

// function to show the grades table time 
var Schedule= function(e){	
	// hide id spans
      hideSpan();

	//  show Schedule exam form 
	var elem =document.getElementById("ScheduleSpan");
	elem.style.display = 'block';	

	$.get('ScheduleTime.php', function(data) {
    document.getElementById('myTable').innerHTML = data;
	});
};

// function to show the the inbox 
var inbox= function(e){	
	// hide id spans
	   hideSpan();

	//  show Schedule exam form 
	var elem =document.getElementById("InboxSpan");
	elem.style.display = 'block';	
	$.get('inbox.php', function(data) {
  document.getElementById('inboxDiv').innerHTML = data;
});
};

// dete the massege by sending the id num to the php page
var DeleteInbox= function(id){	
	window.location.href = "deleteInbox.php?name=" + id; 
};


// function to show the the inbox 
var sendMassege= function(e){	
	// hide id spans
	   hideSpan();

	//  show Schedule exam form 
	var elem =document.getElementById("outBoxSpan");
	elem.style.display = 'block';	

};



var pay= function(e){	
	// hide id spans
	   hideSpan();

	//  show Schedule exam form 
	var elem =document.getElementById("paysSpan");
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

        xmlhttp.open("GET","PaysStudentTbelsS.php?clicked_id="+"ddd",true);
        xmlhttp.send();	

};




// function to show the the inbox 
var hideSpan= function(e){	
	// hide id spans
	//  show Schedule exam form 
	var elem =document.getElementById("outBoxSpan");
	elem.style.display = 'none';	
	//  show Schedule exam form 
	var elem =document.getElementById("paysSpan");
	elem.style.display = 'none';	
	var elem =document.getElementById("InboxSpan");
	elem.style.display = 'none';
	var elem =document.getElementById("ScheduleSpan");
	elem.style.display = 'none';	
	var elem =document.getElementById("examScude");
	elem.style.display = 'none';
	var elem =document.getElementById("GreadsTable");
	elem.style.display = 'none';
	var elem =document.getElementById("welcom");
	elem.style.display = 'none';

};
