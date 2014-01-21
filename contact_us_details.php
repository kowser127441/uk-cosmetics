<p>Please contact us via the form below. We aim to respond to all emails as soon as possible. </p>



<!-- <p style="font-weight:bold;color:red; font-size:18px;">We are currently experiencing technical difficulties with the below form. </p>

<p style="font-size:15px;">Please call us on 0845 6710709 or email us <a href="mailto:customer.relations@superdrug.com"/>customer.relations@superdrug.com</a></p>-->







<div id="feedbackform">

<script type="text/javascript" language="javascript"> 

<!-- 

function validateFields() { 

        if (document.contactusform.field1.value == '') { 

                alert('Please select your title.'); 

                document.contactusform.field1.focus(); 

                return; 

        }

        if (document.contactusform.field2.value == '') { 

                alert('Please enter your First name.'); 

                document.contactusform.field2.focus(); 

                return; 

        } 

    	if (document.contactusform.field3.value == '') { 

                alert('Please enter your Last name.'); 

                document.contactusform.field3.focus(); 

                return; 

        } 

        // check email 

        var custEmail = document.contactusform.field4.value; 

        if (custEmail == '') { 

                alert('Please enter your email address.'); 

                document.contactusform.field4.focus(); 

                return; 

        }

		   

        if ((custEmail.indexOf('@') < 0) || 

				((custEmail.charAt(custEmail.length-4) != '.') && 

				(custEmail.charAt(custEmail.length-3) != '.'))) { 

                alert('Please enter a valid email address.'); 

                document.contactusform.field4.focus(); 

                return; 

        } 

		

		if (document.contactusform.field6.value == '') { 

			alert('Please enter your Address.'); 

			document.contactusform.field6.focus(); 

			return; 

		}

		

		if (document.contactusform.field7.value == '') { 

			alert('Please enter your Post Code.'); 

			document.contactusform.field7.focus(); 

			return; 

		} 



	

        // check subject 

        if (document.contactusform.field8.value == '') { 

                alert('Please select a reason for contacting us.'); 

                document.contactusform.field8.focus(); 

                return; 

        } 

        // check message 

        if (document.contactusform.field12.value == '') { 

                alert('Please enter details of your query.'); 

                document.contactusform.field12.focus(); 

                return; 

        }

		

		document.contactusform.from.value = document.contactusform.field4.value; 

		document.contactusform.to.value = document.contactusform.field8.value; 



		var e = document.getElementById("ddlSubject");

		var strUser = e.options[e.selectedIndex].text;

		

		document.contactusform.subject.value = strUser + " - " + document.contactusform.field2.value + " " + document.contactusform.field3.value;

		

        document.contactusform.submit(); 

} 



// --> 

</script>
 

<p>Fields with an asterisk (<span class="required">*</span>) must be filled in.</p>

<form action="contactuspage.php" method="post" name="contactusform">

  
  <fieldset class="contact">



    <div class="contactusformRow subject">

      <label for="ddlTitle">Title: <span class="required">*</span></label>

      <select id="tile" name="title">

        <option value="">Please Select</option>

        <option value="Mr">Mr </option>

        <option value="Mrs">Mrs </option>

        <option value="Miss">Miss </option>

        <option value="Ms">Ms </option>

 <option value="Dr">Dr</option>

      </select>

    </div>

      

     <div class="contactusformRow name">

      <label for="txtName"> Name: <span class="required">*</span></label>

      <input type="text" id="name" class="name_l" name="name">

    </div>

     <div class="contactusformRow name"></div>  

    <div class="clear"></div>

    <div class="contactusformRow email">

      <label for="txtEmail">Email Address: <span class="required">*</span></label>

      <input type="text" id="email" class="email_l" name="email">

    </div>      

    <div class="clear"></div>

    <div class="contactusformRow telephone">

      <label for="txtPhone1">Contact Number: </label>

      <input type="text" id="contact_number" class="telephone_l" name="contact_number">

    </div>

    <div class="clear"></div>    

    <div class="contactusformRow message">

      <label for="txtaddress">Address <span class="required">*</span></label>

      <textarea cols="25" rows="5" id="address" class="message_a" name="address"></textarea>

    </div>    

    <div class="clear"></div>

    <div class="contactusformRow telephone"></div>



    <div class="clear"></div>    

    <div class="contactusformRow subject">

      <label for="ddlSubject">Reason for contact: <span class="required">*</span></label>
       <input type="text" id="reasonofcontact" name="reasonofcontact">
      
    </div>

    <div class="clear"></div>

    <div class="contactusformRow ordernumber">

      <label for="txtOrder">Order Number:</label>

      <input type="text" id="ordernumber" name="ordernumber">

    </div>

    <div class="clear"></div>

    <div class="contactusformRow ordernumber"></div>    

    <div class="clear"></div>

    <div class="contactusformRow ordernumber">

      <label for="txtproductdesc">Name of Product:</label>

      <input type="text" id="nameofproduct" name="nameofproduct">

    </div> 

    <div class="clear"></div>    

    <div class="contactusformRow message">

      <label for="txtComments">Details of Enquiry <span class="required">*</span></label>

      <textarea cols="25" rows="5" id="detailsquery" class="message_l" name="detailsquery"></textarea>

    </div>

    <div class="clear"></div>

    <div id="buttons">

      <input type="image" class="left" style="width: 59px; height: 19px; margin-left: 220px;" alt="Continue" src="images/bt_submit.gif" onClick="validateFields(); return false;">

    </div>

  </fieldset>

</form>

</div>



<h2>Head Office</h2>

<p>
  
  Gulshan 1, Gulshan Shopping Centre <br>

Shop<br>

No. 131<br>

Dhaka</p> 



<h3>Call Us</h3>

<p>Call us on <a href="Tel:02-9881008">Tel:02-9881008</a></p>