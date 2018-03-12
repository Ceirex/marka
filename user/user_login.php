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
	</script>

	<div id="header">
        
        <h2>Please log in</h2>
	<hr>
	</div>
	
	<div id="content">
            <form name="loggedin" id="loggedin"  action=""> <!-- Form needs an action after login -->
		
		<label for="idusername">Username:</label>
		<input type="text" name="yourusername" id="idusername" size="30" maxlength="100">
		<br>
		<br>
		<label for="idpassword">Password:</label>
		<input type="text" name="yourpassword" id="idpassword" size="30" maxlength="100">
		<br>
		<br>


		<br>

	</form>

	<a href="<?php echo $base_path . '/user/user_menu.php'; ?>"><button type="button" class="btn btn-default">Submit</button></a>
	
	<a href="<?php echo $base_path . '/user/user_signup.php'; ?>"><button type="button" class="btn btn-success">Sign Up</button></a>
	
	</div>
</div>
 </div>

	
</div>
 </div>

	
	
         