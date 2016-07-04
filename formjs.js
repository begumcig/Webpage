

//function to display Popup
function div_show(){ 
var formbck = document.getElementById('popupbck');
var form = document.getElementById('popup');
formbck.style.display = "block";
form.style.display = "block";
form.style.opacity = "1";
$("#name").focus(); //for some reason the autofocus attribute didn't work, so i used jquery.

}

//function to hide Popup
function div_hide(){ 
var formbck = document.getElementById('popupbck');
var form = document.getElementById('popup');
formbck.style.display = "none";
form.style.display = "none";
form.style.opacity = "0";
}

function get_element(){

var selection = document.getElementById("reason");
//document.getElementById("lel").innerHTML = selection.options[selection.selectedIndex].text;
selection.style.border = "2px solid #6f6d6f";

}

function check_stuff()
{
	var selection = document.getElementById("reason");
	var emb = document.getElementById("mail");
	var email = document.getElementById("mail").value;
	var comb = document.getElementById("comment");
	var comment = document.getElementById("comment").value;

	//document.getElementById("lel").innerHTML = email;
	var regex = new RegExp("[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}");
	var res = regex.test(email);
	var empty = "";
	
	
	if(res != true)
	{
		emb.style.border = "2px solid red";
		alert("Please enter a valid email address.");
	}

	else if(selection.options[selection.selectedIndex].value == "def")
	{
		selection.style.border = "2px solid red";
		alert("you should pick a value");
	}

	else if(comment == "")
	{
		comb.style.border = "2px solid red";
		alert("Please fill the comment area.")
	}
	else
		var form = document.getElementById("form").submit();

}

function div_login()
{
	var loginbck = document.getElementById('loginbck');
	var login = document.getElementById('login');
	loginbck.style.display = "block";
	login.style.display = "block";
	login.style.opacity = "1";
	$("#username").focus(); //for some reason the autofocus attribute didn't work, so i used jquery.

}

function login_hide()
{
	var formbck = document.getElementById('loginbck');
var form = document.getElementById('login');
formbck.style.display = "none";
form.style.display = "none";
form.style.opacity = "0";

}