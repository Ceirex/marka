<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>

<div class="part7">

    <div class="container">
        <div class="mainstuff">    
            <div class="header" style="padding: 20px;">
                <center>
                    <h1 style="font-weight: bolder; color:rgba(5,56,107,.9);">Create An Account</h1>
                </center><hr style="width: 75%">
            </div>        

        	<div id="content" style="padding: 0px  40px 40px 40px;">
                <center>
                    <form id="register"  action="index.php" method="post">
                        <div class="f_row" style="margin-left: 35px">
                            <input class="u_names" size="25" type="text" name="firstname" id="idfirstname" placeholder="First Name" tabindex="1" required="on"> 
                            <input class="u_names" size="25" type="text" name="lastname" id="idlastname" placeholder="Last Name" tabindex="2" required="on">              
                        </div> 

                        <div class="inputWithIcon">
                          <div class="icon">
                              <label for="idusername"><i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i></label>
                          </div>
                          <input type="text"  name="username" id="idusername" placeholder="Username" size="50" tabindex="3" required="on">
                        </div>

                        <div class="inputWithIcon">
                            <div class="icon">
                                <label for="idpassword"><i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i></label>
                            </div>
                          <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="- Must contain at least one number and one uppercase and lowercase letter | - At least 8 or more characters"  name="password" id="idpassword" placeholder="Password" size="50" tabindex="4" required="on">
                        </div>

                        <div class="inputWithIcon">
                            <div class="icon">
                                <label for="idpasswordconfirm"><i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i></label>
                            </div>
                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="- Must contain at least one number and one uppercase and lowercase letter | - At least 8 or more characters"  name="repassword" id="idpasswordconfirm" placeholder="Confirm Password" size="50" tabindex="5" required="on">
                        </div>

                        <div class="inputWithIcon">
                            <div class="icon">
                                <label for="idemail"><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i></label>
                            </div>
                            <input type="email" name="email" id="idemail" placeholder="Email" size="50" tabindex="6" required="on">
                        </div>

                        <div class="inputWithIcon">
                            <div class="icon">
                                <label for="idphonenumber"><i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i></label>
                            </div>
                            <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Use 215-204-7000 format" name="phone" id="idphonenumber" placeholder="Phone 215-204-7000" size="50" tabindex="7" required="on">
                        </div>
                        <br><br>

                        <button type="submit" id="submitbutton" name="register" class="btn btn-primary btn-lg" style="padding: 10px 25px 10px 25px;font-size: 1.4em;color: #fff" tabindex="8">Register</button>

                	</form>
                        <br><a href="<?php echo $base_path . '/user' ?>"><button  type="submit"  class="btn btn-link btn-md" tabindex="9">Sign In</button></a>
                </center>
             </div>
        </div>
     </div>
</div>
 


	
	

<?php include '../view/footer.php';?>