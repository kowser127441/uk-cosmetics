function validateForm()
{
 
 // First Name velidation -
	 var n=document.forms["wizform"]["fname"].value;
  if (n==null || n=="")
  {
  alert("First Name field can't be empty");
  return false;
  
  }
  
   // Last Name velidation -
	 var n=document.forms["wizform"]["lname"].value;
  if (n==null || n=="")
  {
  alert("Last Name field can't be empty");
  return false;
  
  }
  
     // house Name velidation -
	 var n=document.forms["wizform"]["num"].value;
  if (n==null || n=="")
  {
  alert("House Name/Flat Name field can't be empty");
  return false;
  
  }
  // Address velidation -
	 var address=document.forms["wizform"]["address"].value;
	 //var n = document.getElementById("addr1").value ; 
  if (address==null || address=="" || address==" ")
  {
  alert("Address field can't be empty");
  return false;
  
  }
  
   // Town/City velidation
  	 var n=document.forms["wizform"]["city"].value;
  if (n==null || n=="")
  {
  alert("Town/City field can't be empty");
  return false;
  
  }
  /*
     // Country velidation
  	 var n=document.forms["wizform"]["cntry"].value;
  if (n==null || n=="")
  {
  alert("Country field can't be empty");
  return false;
  
  }
  
  */
  
  // Postalcode velidation -
	 var n=document.forms["wizform"]["zipc"].value;
  if (n==null || n=="")
  {
  alert("Postal Code No. field can't be empty");
  return false;
  
  }
  
 //Email velidation -
	   var x=document.forms["wizform"]["usemail"].value;
	  var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
   //confirm Email velidation -
	   var y=document.forms["wizform"]["usemailconfirm"].value;
	  var atpos=y.indexOf("@");
	var dotpos=y.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
  {
  alert("Confirm your e-mail address");
  return false;
  }
  
  
  
  // Both email checking
  //	var email_1=document.forms["wizform"]["usemail"].value;
  //	var email_2=document.forms["wizform"]["usemailconfirm"].value;
	
	if (x != y)
  {
  alert("Both email field did not matched");
  return false;
  }
  
  
  
  
  

  
// Phone velidation -
	 var m=document.forms["wizform"]["usxtmobile"].value;
  if (m==null || m=="")
  {
  alert("Phone No. field can't be empty");
  return false;
  
  }
  
  
  
  
  // phone velidation -
	 var p=document.forms["wizform"]["phone"].value;
  if (p==null || p=="")
  {
  alert("Preferred contact Number can't be empty");
  return false;
  
  }
    // password velidation -
	 var pa=document.forms["wizform"]["uspswd"].value;
  if (pa==null || pa=="")
  {
  alert("Password  can't be empty");
  return false;
  
  }
      //confrim password velidation -
	 var rp=document.forms["wizform"]["uspswd2"].value;
  if (rp==null || rp=="")
  {
  alert("Confirm Password  can't be empty");
  return false;
  
  }
  
  // Both password checking 
   if(pa != rp)
   {
	   alert("password and confirm password dod not matchd !");
	   return false;
   }
  
  // agree velidation -

   if(!document.forms["wizform"].checkbox.checked)
{
    alert('You must agree to the terms first.');
    return false;
}
  
  
  
  
}