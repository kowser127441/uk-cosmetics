function login_check()
{
	
	 //Email velidation -
	   var x=document.forms["secondloginform"]["email"].value;
		if (x==null || x=="")
  		{
  		alert("Email field cant be Empty !");
  		return false;
  		}
  
	
	 //Email velidation -
	   var x=document.forms["secondloginform"]["email"].value;
	  var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert("Not a valid e-mail address");
	  return false;
	  }
  
 
 // First Name velidation -
	 var n=document.forms["secondloginform"]["password"].value;
  if (n==null || n=="")
  {
  alert("Password field can't be empty");
  return false;
  
  }
  
  
  
  
}