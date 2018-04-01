<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>
 
 <div class="part7">
<div class="container">


        <div class="mainstuff">    
            <div class="header" style="padding: 20px;">
                <center>
                    <h1 style="font-weight: bolder; color:rgba(5,56,107,.9);">Purchase</h1>
                </center><hr style="width: 75%">
            </div>        
		
	<div id="content" style="padding: 40px;">
				<form action="#" method="post">
					<div>
						<label for="f_name" >First Name: </label><input class="input_box" width="30%;" style="margin-left: 10px;" type="text" name="f_name" id="f_name" value="" tabindex="1"/>
						<label for="l_name" style="margin-left: 50px; ">Last Name: </label><input class="input_box" width="30%" style="margin-left: 10px;" type="text" name="l_name" id="l_name" value="" tabindex="2"/>
						
						<br><br><br><h3>Address</h3><hr>
						<label for="street" class="label_t">Street: </label><input class="input_box" type="text" name="street" id="street" value="" tabindex="3"/><br><br>
						<label for="city" class="label_t">City: </label><input class="input_box" type="text" name="city" id="city" value="" tabindex="4"/><br><br>
						<label for="beaches" class="label_t">Beaches: </label>
							<select name="select-choice" tabindex="5" id="beaches">
								<option value="Choice 1">Ocean City NJ</option>
								<option value="Choice 2">Cape May</option>
								<option value="Choice 3">Wildwood</option>
								<option value="Choice 3">Avalon</option>
							</select>
						<br><br>
			                        
			                        <label for="passes" class="label_t">Passes: </label>
							<select name="select-choice" tabindex="5" id="passes">
								<option value="Choice 1">Seasonal</option>
								<option value="Choice 2">Weekly</option>
								<option value="Choice 3">Daily</option>
							</select>
						<br><br>

						<label for="zip" class="label_t">Zip: </label><input class="input_box" type="text" name="zip" id="zip" value="" tabindex="6"/>

						<hr>
			                        
			                        <br><h3>Card Information</h3><hr>
						<label for="name" class="label_t">Name on Card: </label><input class="input_box" type="text" name="name" id="city" value="" tabindex="4"/><br><br>
			                        <label for="number" class="label_t">Number: </label><input class="input_box" type="text" name="number" id="street" value="" tabindex="3"/><br><br>
						<label for="cards" class="label_t">Security Code: </label>
							<select name="select-choice" tabindex="5" id="cards">
								<option value="Choice 1">Visa</option>
								<option value="Choice 2">MasterCard</option>
								<option value="Choice 3">Discover</option>
							</select>
						<br><br><hr>
			                        
						<label for="qty_t" class="label_t">Qty Tags: </label><input type="text" name="qty_t" id="qty_t" value="" tabindex="7"/>
						<br><br>

						<label for="checkbox"><a href="#">Agree to Terms</a></label>
						<input style="margin-left: 5px;" type="checkbox" name="checkbox" id="checkbox" tabindex="8" />
				
					</div><br>
					
					<div>
						<a href="#"><button type="button" class="btn btn-success" tabindex="9">Submit</button></a>
					</div>
				</form></div>
		</div>

	</div>
</div>


<?php include '../view/footer.php'?>