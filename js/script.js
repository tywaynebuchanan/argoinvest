//Global variables
var phone = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
var tax = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{3}$/;
var emailregex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
var money = /^[0-9]{5}[-\s\.][0-9]{2}/;


document.getElementById("pg").addEventListener("click", function(){
if(pg.checked === true){

	alert("Plantain");
}
});

$(document).ready(function() {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $("#burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});


// function Hide(){

// 		$("#insertNotestbl").hide();
// 		$("#addNotesbtn").html("Add Note");

// }

// var element = document.getElementById("#insertNotestbl");
// 	element.style.display = 'none';
	
//Functions for Login Page
function showError(){

	var error = document.getElementById("error");
	var error_uname = document.getElementById("error1");
	var error_pass = document.getElementById("error2");
	var username = document.getElementById("username");
	var password = document.getElementById("password");

if(!username.value && !password.value)
	{ 
		error.style.display = 'inline-flex';
		username.classList.toggle("is-danger");
		password.classList.toggle("is-danger");
		return false;
	}

if(!username.value)
{
		error_uname.style.display = "inline";
		username.classList.toggle("is-danger");
		return false;

	} 

if(!password.value){
		error_pass.style.display = "inline";
		password.classList.toggle("is-danger");
		return false;

}
}

function UpdateUser()
{

	var username = document.getElementById("username");
	emailuser.classList.toggle("");

}

function UpdatePwd(){
	var psd = document.getElementById("exampleInputPassword1");
	document.getElementById("error_pwd").style.display = 'none';
	psd.classList.toggle("is-valid");
}




