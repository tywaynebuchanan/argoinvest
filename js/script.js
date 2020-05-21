function ShowTable() {
  var element = document.getElementById("table_info");
  element.classList.toggle("show-info");
}

// function Alert(){

// 	alert('This worked');
// }
// 
// 

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

function CheckPassword(){
var pass = document.getElementById("password");
alert('This works');
}

function ViewProfile(){

	var element = document.getElementById("modal");
	element.style.display = 'flex';
}
