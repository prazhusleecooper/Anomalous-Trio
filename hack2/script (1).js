
function myFunction() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var dob = document.getElementById("dob").value;
var age = document.getElementById("age").value;
var address = document.getElementById("address").value;
var phone = document.getElementById("phone").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString = '&name1=' + name + '&email1=' + email + '&password1=' + password + '&dob1=' + dob + '&age1=' + age + '&address1=' + address + '&phone1=' +phone;
if (name == '' || email == '' || address == '' || password == '' || dob == ''|| age == '' || phone=='') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjs.php",
data: dataString,
cache: false,
success: function(html) {


window.location.href="login.html"
alert(html);
}

});
}
return false;
}
