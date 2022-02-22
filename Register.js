var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['pass'];
var password_confirm = document.forms['vform']['passc'];
var address = document.forms['vform']['address'];
var zipcode = document.forms['vform']['zipcode'];
var phone = document.forms['vform']['phone'];
var namee = document.forms['vform']['name'];
var lastname = document.forms['vform']['lastN'];

var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var address_error = document.getElementById('address_error');
var zipcode_error = document.getElementById('zipcode_error');
var phone_error = document.getElementById('phone_error');
var namee_error = document.getElementById('namee_error');
var lastname_error = document.getElementById('lastname_error');

username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
address.addEventListener('blur', addressVerify, true);
zipcode.addEventListener('blur', zipcodeVerify, true);
phone.addEventListener('blur', phoneVerify, true);
namee.addEventListener('blur', nameeVerify, true);
lastname.addEventListener('blur', lastnameVerify, true);

function Validate() {
 
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }

  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }

  if (address.value == "") {
    address.style.border = "1px solid red";
    document.getElementById('address_div').style.color = "red";
    address_error.textContent = "Address is required";
    address.focus();
    return false;
  }
  if (address.value.length < 3) {
    address.style.border = "1px solid red";
    document.getElementById('address_div').style.color = "red";
    address_error.textContent = "Address must contain atleast more than 3 characters";
    address.focus();
    return false;
  }

  if (zipcode.value == "") {
    zipcode.style.border = "1px solid red";
    document.getElementById('zipcode_div').style.color = "red";
    zipcode_error.textContent = "Zipcode is required";
    zipcode.focus();
    return false;
  }
  if (zipcode.value.length < 3) {
    zipcode.style.border = "1px solid red";
    document.getElementById('zipcode_div').style.color = "red";
    zipcode_error.textContent = "Zipcode must contain atleast more than 3 numbers";
    zipcode.focus();
    return false;
  }

  if (phone.value == "") {
    phone.style.border = "1px solid red";
    document.getElementById('phone_div').style.color = "red";
    phone_error.textContent = "Phone number is required";
    phone.focus();
    return false;
  }
  if (phone.value.length < 9) {
    phone.style.border = "1px solid red";
    document.getElementById('phone_div').style.color = "red";
    phone_error.textContent = "Phone number must contain atleast more than 9 numbers";
    phone.focus();
    return false;
  }

  if (namee.value == "") {
    namee.style.border = "1px solid red";
    document.getElementById('namee_div').style.color = "red";
    namee_error.textContent = "Name is required";
    namee.focus();
    return false;
  }
  if (namee.value.length < 2) {
    namee.style.border = "1px solid red";
    document.getElementById('namee_div').style.color = "red";
    namee_error.textContent = "The name must contain more than 2 characters";
    namee.focus();
    return false;
  }

  if (lastname.value == "") {
    lastname.style.border = "1px solid red";
    document.getElementById('lastname_div').style.color = "red";
    lastname_error.textContent = "Lastname is required";
    lastname.focus();
    return false;
  }
  if (lastname.value.length < 2) {
    lastname.style.border = "1px solid red";
    document.getElementById('lastname_div').style.color = "red";
    lastname_error.textContent = "The lastname must contain more than 2 characters";
    lastname.focus();
    return false;
  }

  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }

  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }

  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}

function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }

}

function addressVerify(){
  if (address.value != "") {
    address.style.border = "1px solid #5e6e66";
    document.getElementById('address_div').style.color = "#5e6e66";
    address_error.innerHTML = "";
    return true;
   }
 
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === password_confirm.value) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}

function login(){
    
  window.location = "Login.php";
  
  }