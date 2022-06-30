function validateForm() {
    var x = document.forms["login"]["email-modal"].value;
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
	if (x == "") {
        alert("enter email");
        return false;
    }
	else if(atpos < 1 || dotpos < (atpos+2) || dotpos+2 >= x.length)
{
	alert("*not a valid email address");
	return false;
}


var y=document.forms["login"]["password-modal"].value;
if(y == "")
{
	alert("enter password");
	return false;
}
}

function seatavail(){
    var z = document.forms["seat-availability"]["aa"].value;
	if (z == "" || z.length != 5) {
        alert("wrong train no.");
        return false;
    }
	 var date = document.forms["seat-availability"]["bb"].value;
	if (date == "") {
        alert("insert date");
        return false;
    }
	}
	
	
	
	
	function register()
	{
	var name = document.forms["registration"]["aa"].value;
	if (name == "") {
        alert("enter name");
        return false;
    }
	var fname = document.forms["registration"]["bb"].value;
	if (fname == "") {
        alert("enter father name");
        return false;
    }
	var Mname = document.forms["registration"]["cc"].value;
	if (Mname == "") {
        alert("enter mother name");
        return false;
    }
	
	
	
	 var date = document.forms["registration"]["dd"].value;
	if (date == "") {
        alert("insert date");
        return false;
    }
	 var email = document.forms["registration"]["ee"].value;
    var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
	if (email == "") {
        alert("enter email");
        return false;
    }
	else if(atpos < 1 || dotpos < (atpos+2) || dotpos+2 >= email.length)
{
	alert("*not a valid email address");
	return false;
}
	var pno= document.forms["registration"]["ff"].value;
	var quo=Math.floor(pno/1000000000);
	if (pno == "") {
        alert("insert phone no.");
        return false;
    }
	if (quo<6 || pno.length!=10) {
        alert("enter correct no.");
        return false;
    }
	
	
	
	var adhr= document.forms["registration"]["gg"].value;
	if (adhr== "") {
        alert("insert date");
        return false;
    }
	if (adhr.length!=12) {
        alert("enter correct no.");
        return false;
    }
	
	var pass= document.forms["registration"]["hh"].value;
	var cpass= document.forms["registration"]["ii"].value;
	
	if(pass== "" )
{
	alert("*please enter your password");
	return false;
}
else if(pass.length<6)
{
	alert("*password is too small");
	return false;
}
else if(cpass=="")
{
	alert("*please re-enter your password");
	return false;
}
else if(pass !=cpass)
{
	alert("*password did not match");
	return false;
}

	
	}
