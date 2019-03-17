document.addEventListener("DOMContentLoaded", function() {
	var mail;
	<?php
		$mmail = $_GET['userEmail'];
		echo "<script type="javascript"> mail= "+$mmail+" ;     </script>";
	?>
	alert(mail);
 var dummy = "abc";
/*	alert("high");
	 var email1,name1,dob1,age1,address1;
	displayElements(var email){
			email1 = email;

	}*/
	

	var datastring='&dum' + dummy;

	$.ajax({
type: "POST",
url: "profPhp.php",
data: dataString,
cache: false,
success: function(html) {


//alert(html);
alert("Welcome!!!!!!!!1");
//window.location.href="profile.html";
//displayElements(email);

}

});
});