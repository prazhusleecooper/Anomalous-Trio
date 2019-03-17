document.addEventListener("DOMContentLoaded", function() {
  myfun();
function myfun()
{
	
var elements=document.getElementById("loginform").elements;
var obj={};
for(var i=0;i<elements.length;i++)
{

	var item=elements.item(i);
	alert(item);
}

}


});