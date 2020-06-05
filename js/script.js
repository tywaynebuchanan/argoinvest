//Global variables
var phone = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
var tax = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{3}$/;
var emailregex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
var money = /^[0-9]{5}[-\s\.][0-9]{2}/;



$(function(){

  $('#homephone').mask("999-999-9999",{placeholder:"___-___-____"});
  $('#mobilephone').mask("999-999-9999",{placeholder:"___-___-____"});
  $('#officephone').mask("999-999-9999",{placeholder:"___-___-____"});
  $('#trn').mask("999-999-999",{placeholder:"___-___-___"});
  $('#tcc').mask("999-999-999",{placeholder:"___-___-___"});
  $("#rate").mask("99999.99",{placeholder:"_____.__"});
  });

$(function()
{
	//Hide error messages 
	$("#err_file").hide();
	$("#err_fname").hide();
	$("#err_lname").hide();
	$("#err_street").hide();
	$("#err_city").hide();
	$("#err_ophone").hide();
	$("#err_mphone").hide();
	$("#err_hphone").hide();
	$("#err_email").hide();
	$("#error_trn").hide();
	$("#error_tcc").hide();
	$("#error_arc").hide();
	$("#error_rate").hide();
	
	
//Set error messages to false
	var error_file = false;
	var error_fname = false;
	var error_lname = false;
	var error_street = false;
	var error_city = false;
	var error_ophone= false;
	var error_mphone= false;
	var error_hphone= false;
	var error_email = false;
	var error_trn = false;
	var error_tcc = false;
	var error_arc = false;
	var error_rate = false;
	

		$("#addNotesbtn").click(function(){
			$("#insertNotestbl").show();
	});

	

	$("#filenumber").focusout(function(){
		checkfilenum();
	});

	$("#fname").focusout(function(){
		checkfname();
	});

	$("#lname").focusout(function(){
		checklname();
	});

	$("#street").focusout(function(){
		checkstreet();
	});

	$("#city").focusout(function(){
		checkcity();
	});

	$("#officephone").focusout(function(){
		checkophone();
	});

		$("#mobilephone").focusout(function(){
		checkmphone();
	});

	$("#homephone").focusout(function(){
		checkhphone();
	});

	$("#email").focusout(function(){
		checkemail();
	});

	$("#trn").focusout(function(){
		checktrn();
	});

	$("#tcc").focusout(function(){
		checktcc();
	});

	$("#acreage").focusout(function(){
		checkacreage();
	});
	$("#rate").focusout(function(){
		checkrate();
	});

}); // End of function 

function checkfilenum(){

	var file = $("#filenumber").val().length 

	// file < 2 ? $("#err_file").html("This can not be blank");, $("#filenumber").addClass("is-danger");,
	// 			$("#err_file").show();, error_file = true; : $("#err_file").hide(); ,
	// 			$("#filenumber").removeClass("is-danger");,
	// $("#filenumber").addClass("is-success");

	if(file < 2)
	{
		
		$("#err_file").html("This can not be blank");
		$("#filenumber").addClass("is-danger");
		$("#err_file").show();
		error_file = true;
	}else
	{
		$("#err_file").hide();
		$("#filenumber").removeClass("is-danger");
		$("#filenumber").addClass("is-success");
	}
}

function checkfname(){

	var field = $("#fname").val();
	if(field =="")
	{
		$("#err_fname").html("This can not be blank");
		$("#fname").addClass("is-danger");
		$("#err_fname").show();
		error_fname = true;

	}else if(!isNaN(field))
	{
		$("#err_fname").html("This field only takes Letters");
		$("#fname").addClass("is-danger");
		$("#err_fname").show();
		error_fname = true;
	}else

	{
		$("#err_fname").hide();
		$("#fname").removeClass("is-danger");
		$("#fname").addClass("is-success");		
	}
}

function checklname(){

	var field = $("#lname").val()
	if(field =="")
	{
		$("#err_lname").html("This can not be blank");
		$("#lname").addClass("is-danger");
		$("#err_lname").show();
		error_lname = true;
	}else if(!isNaN(field))
	{
		$("#err_lname").html("This field only takes Letters");
		$("#lname").addClass("is-danger");
		$("#err_lname").show();
		error_lname = true;
	}else
	{
		$("#err_lname").hide();
		$("#lname").removeClass("is-danger");
		$("#lname").addClass("is-success");		
	}
}

function checkstreet(){

	var field = $("#street").val()
	if(field =="")
	{
		$("#err_street").html("This can not be blank");
		$("#street").addClass("is-danger");
		$("#err_street").show();
		error_street = true;
	}else
	{
		$("#err_street").hide();
		$("#street").removeClass("is-danger");
		$("#street").addClass("is-success");		
	}
}

function checkcity(){

	var field = $("#city").val()
	if(field =="")
	{
		$("#err_city").html("This can not be blank");
		$("#city").addClass("is-danger");
		$("#err_city").show();
		error_street = true;
	}else
	{
		$("#err_city").hide();
		$("#city").removeClass("is-danger");
		$("#city").addClass("is-success");		
	}
}

function checkophone(){

	var field = $("#officephone").val();
	if(!field.match(phone))
	{
		$("#err_ophone").html("Invalid number");
		$("#officephone").addClass("is-danger");
		$("#err_ophone").show();
		error_street = true;
	}else 
	{
		$("#err_ophone").hide();
		$("#officephone").removeClass("is-danger");
		$("#officephone").addClass("is-success");		
	}
}

function checkmphone(){

	var field = $("#mobilephone").val();
	if(!field.match(phone))
	{
		$("#err_mphone").html("Invalid number");
		$("#mobilephone").addClass("is-danger");
		$("#err_mphone").show();
		error_street = true;
	}else 
	{
		$("#err_mphone").hide();
		$("#mobilephone").removeClass("is-danger");
		$("#mobilephone").addClass("is-success");		
	}
}

function checkhphone(){

	var field = $("#homephone").val();
	if(!field.match(phone))
	{
		$("#err_hphone").html("Invalid number");
		$("#homephone").addClass("is-danger");
		$("#err_hphone").show();
		error_street = true;
	}else 
	{
		$("#err_hphone").hide();
		$("#homephone").removeClass("is-danger");
		$("#homephone").addClass("is-success");		
	}
}

function checkemail(){

	var field = $("#email").val();
	if(!field.match(emailregex))
	{
		$("#error_email").html("Invalid Email Address");
		$("#email").addClass("is-danger");
		$("#error_email").show();
		error_email = true;
	}else
	{
		$("#error_email").hide();
		$("#email").removeClass("is-danger");
		$("#email").addClass("is-success");		
	}
}

function checktrn(){

	var field = $("#trn").val();
	if(!field.match(tax))
	{
		$("#error_trn").html("Invalid TRN");
		$("#trn").addClass("is-danger");
		$("#error_trn").show();
		error_trn = true;
	}else 
	{
		$("#error_trn").hide();
		$("#trn").removeClass("is-danger");
		$("#trn").addClass("is-success");		
	}
}

function checktcc(){

	var field = $("#tcc").val();
	if(!field.match(tax))
	{
		$("#error_tcc").html("Invalid Company TCC");
		$("#tcc").addClass("is-danger");
		$("#error_tcc").show();
		error_tcc = true;
	}else 
	{
		$("#error_tcc").hide();
		$("#tcc").removeClass("is-danger");
		$("#tcc").addClass("is-success");		
	}
}

function checkacreage(){

	var field = $("#acreage").val();
	if(field =="" || field <= 0 || field > 2000 || isNaN(field))
	{
		$("#error_arc").html("Invalid Acreage Amount.")
		$("#acreage").addClass("is-danger");
		$("#error_arc").show();
		error_tcc = true;
	}else 
	{
		$("#error_arc").hide();
		$("#acreage").removeClass("is-danger");
		$("#acreage").addClass("is-success");		
	}
}

$(function() 

{
	$("#select").change(function()
	{
		var acreage = $("#acreage").val();
		var noacreage = 0;
		var display = $("#select option:selected").text();
		if (display == "Yes")
		{
			$("#irrigated").val(acreage);
			$("#notirrigated").val(noacreage);
		}else {
			$("#irrigated").val(noacreage);
			$("#notirrigated").val(acreage);
		}
	})
})

function checkrate(){

	var field = $("#rate").val();
	if(!field.match(money))
	{
		$("#error_rate").html("Invalid rate.Please enter")
		$("#rate").addClass("is-danger");
		$("#error_rate").show();
		error_tcc = true;
	}else 
	{
		$("#error_rate").hide();
		$("#rate").removeClass("is-danger");
		$("#rate").addClass("is-success");		
	}
}

function UpperCase()
{
	$('#filenumber').val($('#filenumber').val().toUpperCase())
}

function Validate(){

	error_file = false;
	error_fname = false;
	error_lname = false;
	error_street = false;
	error_city = false;
	error_ophone= false;
	error_mphone= false;
	error_hphone= false;
	error_email = false;
	error_trn = false;
	error_tcc = false;
	error_arc = false;
	error_rate = false;

	checkfilenum();
	checkfname();	
	checklname();
	checkstreet();
	checkcity();
	checkophone();
	checkmphone();
	checkhphone();
	checkemail();
	checktrn();
	checktcc();
	checkacreage();
	checkrate();
	

if(error_file == false && error_fname == false && error_lname == false && error_street == false &&
	error_city == false && error_ophone== false && error_mphone== false && error_hphone== false &&
	error_email == false && error_trn == false && error_tcc == false && error_arc == false &&
	error_rate == false)

{
	
	
	return true;
}else {
	return false;
}


}

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

if(!username.value){

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

function UpdateUser(){

	var username = document.getElementById("username");
	emailuser.classList.toggle("");

}

function UpdatePwd(){
	var psd = document.getElementById("exampleInputPassword1");
	document.getElementById("error_pwd").style.display = 'none';
	psd.classList.toggle("is-valid");
}


