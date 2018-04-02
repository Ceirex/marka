<?php include '../view/header.php';?>

<!-- <script>
                "use strict";
                
		var validate = function(event){
                    
                    var theForm = document.getElementById('loggedin');
  
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
                            
    }
                //tell the browser what to do when the form gets submitted
                window.onload = function () {
                    document.getElementById('loggedin').onsubmit = function(event){validate(event);};
                }
	</script> -->

<div class="part7">
	
	<div class="container">	

	        <div class="mainstuff" style="width: 500px;">    
			    <div class="header">
			        <center>
			            <h1 style="font-weight: bolder; color:rgba(5,56,107,.9);">Login</h1>
			        </center><hr style="width: 75%">
			    </div>     
				<div id="content"><br><br>
					<center>
				        <form id="login_form"  action="index.php" method="post"> <!-- Form needs an action after login -->
						
						<div class="inputWithIcon">
							<label for="idusername" style="margin-right: 10px">Username:</label>
							<input type="text" name="username" id="idusername" size="30" maxlength="100" required="on" tabindex="1">
						</div>



						<div class="inputWithIcon">
							<label for="idpassword" style="margin-right: 13px">Password:</label>
							<input type="password" name="password" id="idpassword" size="30" maxlength="100" required="on" tabindex="2">
						</div>

							<br>
								<p class="" style="padding: 10px;font-size: 1.2em;color:#EB0000"><?php echo $message; ?></p>
							<br>
							<button type="Submit" name="submit" class="btn btn-primary btn-lg" tabindex="3">Submit</button>
						</form>


					</center><br>
				</div>
	        </div>
		





	</div>
 </div>

	
<?php include '../view/footer.php';?>

	
	
         