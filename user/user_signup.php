<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>


	
<script>
/*                "use strict";
                
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
                }*/
</script>


<div class="part7">

    <div class="container">
        <div class="mainstuff">    
            <div class="header" style="padding: 20px;">
                <center>
                    <h1 style="font-weight: bolder; color:rgba(5,56,107,.9);">Create An Account</h1>
                </center><hr style="width: 75%">
            </div>        

        	<div id="content" ><center>

                <form name="registered" id="registered"  action="marka_login.php">
            		
                    <div class="f_row">
                        <input class="u_names" size="25" type="text" name="yourfirstname" id="idfirstname" placeholder="First Name" tabindex="1" required="on"> 
                        <input class="u_names" size="25" type="text" name="yourlastname" id="idlastname" placeholder="Last Name" tabindex="2" required="on">              
                    </div> 

                    <div class="inputWithIcon">
                      <div class="icon">
                          <label for="idusername"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i></label>
                      </div>
                      <input type="text"  name="yourusername" id="idusername" placeholder="Username" size="50" tabindex="3" required="on">
                    </div>

                    <div class="inputWithIcon">
                        <div class="icon">
                            <label for="idpassword"><i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i></label>
                        </div>
                      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="&#013;- Must contain at least one number and one uppercase and lowercase letter &#013;- At least 8 or more characters"  name="yourpassword" id="idpassword" placeholder="Password" size="50" tabindex="4" required="on">
                      
                    </div>

                    <div class="inputWithIcon">
                        <div class="icon">
                            <label for="idpasswordconfirm"><i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i></label>
                        </div>
                      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="&#013;- Must contain at least one number and one uppercase and lowercase letter &#013;- At least 8 or more characters"  name="yourpasswordconfirm" id="idpasswordconfirm" placeholder="Confirm Password" size="50" tabindex="5" required="on">
                    </div>

                    <div class="inputWithIcon">
                        <div class="icon">
                            <label for="idemail"><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i></label>
                        </div>
                      <input type="email" name="youremail" id="idemail" placeholder="Email" size="50" tabindex="6" required="on">
                    </div>

                    <div class="inputWithIcon">
                        <div class="icon">
                        <label for="idphonenumber"><i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i></label>
                        </div>
                      <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Use 215-204-7000 format" name="yourphonenumber" id="idphonenumber" placeholder="Phone 215-204-7000" size="50" tabindex="7" required="on">
                    </div>
                    <br><br>

                    <button type="submit" id="submitbutton" class="btn btn-primary btn-lg" style="padding: 10px 25px 10px 25px;font-size: 1.4em;color: #fff" tabindex="8">Register</button>

            	</form>
                    <br><a href="<?php echo $base_path . '/user/index.php' ?>"><button style="padding: 7px 15px 7px 15px" type="submit"  class="btn btn-default btn-lg" tabindex="9">Login</button></a>
            </center>

                <br><br>
             </div>
        </div>
     </div>
</div>
 


	
	

<?php include '../view/footer.php';?>