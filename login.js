function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

  if ( username == "jason" && password == "Lacee123"){
window.location.href = "dash.html";
return false;
}
}
/*else{
attempt --;// Decrementing by one.
alert("You have "+attempt+" attempts left;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}*/
}
}
