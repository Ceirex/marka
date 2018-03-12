<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>

<div class="part7" style="background-color: #eee; padding-bottom: 50px; padding-top: 50px;">
<div class="container">

 	<div class="buy_fourm" style="background-color: #fff;border-radius: 15px; padding: 10px;">
 		
	
	<formaction="#" method="post">

		<div style="padding:40px;">
<script>
                "use strict";
                
		var validate = function(event){
                    
                    var theForm = document.getElementById('registered');
  
                    if (theForm.idfirstname.value === "")
                            {
                            alert("You must provide a first name.");
                            event.preventDefault();
                            }
                    if (theForm.idlastname.value === "")
                            {
                            alert("You must provide a last name.");
                            event.preventDefault();
                            }
                    if (theForm.idusername.value === "")
                            {
                            alert("You must provide a username.");
                            event.preventDefault();
                            }
                    if (theForm.idpassword.value === "")
                            {
                            alert("You must provide a password.");
                            event.preventDefault();
                            }
                    if (theForm.idpasswordconfirm.value === "")
                            {
                            alert("You must confirm your password.");
                            event.preventDefault();
                            }
                    if (theForm.idemail.value === "")
                            {
                            alert("You must provide an email.");
                            event.preventDefault();
                            }
                    if (theForm.idphonenumber.value === "")
                            {
                            alert("You must provide a phone number.");
                            event.preventDefault();
                            }
                    if (theForm.idcreditcard.value === "")
                            {
                            alert("You must provide a credit card number.");
                            event.preventDefault();
                            }
                        }
		

                //tell the browser what to do when the form gets submitted
                window.onload = function () {
                    document.getElementById('registered').onsubmit = function(event){validate(event);};
                }
	</script>

	<div id="header">
        
            <h1>Register</h1>
	<hr>
	</div>
	
	<div id="content">
            <form name="registered" id="registered"  action="marka_login.php">
                
		<label for="idfirstname">First Name:</label>
                <input type="text" name="yourfirstname" id="idfirstname" class="label_t">
		
                <br>
                <br>

		
                
                <label for="idlastname">Last Name:</label>
		<input type="text" name="yourlastname" id="idlastname" class="label_t">
		
                <br>
                <br>

		                
                <label for="idusername">Username:</label>
		<input type="text" name="yourusername" id="idusername" class="label_t">
		
                <br>
                <br>
		
		
                <label for="idpassword">Password:</label>
		<input type="text" name="yourpassword" id="idpassword" class="label_t">
                
               <br>
               <br>
		
               
                <label for="idpasswordconfirm">Confirm Password:</label>
		<input type="text" name="yourpasswordconfirm" id="idpasswordconfirm" class="label_t">
                
               <br>
               <br>
		
                
                <label for="idemail">Email Address:</label>
		<input type="text" name="youremail" id="idemail" class="label_t">
                
               <br>
               <br>
		
                
                <label for="idphonenumber">Phone Number:</label>
		<input type="text" name="yourphonenumber" id="idphonenumber" class="label_t">
		
                <br>
                <br>
		
                
                <label for="idcreditcard">Credit Card Number:</label>
		<input type="text" name="yourcreditcard" id="idcreditcard" class="label_t">
		
               <br>
               <br>
		
		
           

		<input type="submit" name="submitbutton" id="submitbutton" value="Register">
		<br>
		<br>
		<div id="box">
		</div>
	</form>
     	</div>
</div>
 </div>

	
</div>
 </div>


	
	

<?php include '../view/footer.php';?>