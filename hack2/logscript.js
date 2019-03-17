
function myFunc() {
//var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
//var dob = document.getElementById("dob").value;
//var age = document.getElementById("age").value;
//var address = document.getElementById("address").value;
//var phone = document.getElementById("phone").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString = '&email1=' + email + '&password1=' + password ;
if (email == '' || password == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "logajaxjs.php",
data: dataString,
cache: false,
success: function(html) {


//alert(html);
alert("Welcome!!!!!!!!");
/*<?php
 session_start();
  $_SESSION['userEmail'] = $email2;

?>*/
window.location.href="profile.html";
//displayElements(email);

}

});
}
return false;
}
