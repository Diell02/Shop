var attempt = 3; 

function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "admin" && password == "admin"){
window.location = "Home.php";
return false;
}
else{
attempt --;
alert("Keni edhe "+attempt+" mundesi per te shenuar sakte user/password");

if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}

function regi(){
    
window.location = "Register/Register.php";

}