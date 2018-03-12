<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>
 
 <div class="part7" style="background-color: #eee; padding-bottom: 50px; padding-top: 50px;">
<div class="container">

 	<div class="buy_fourm" style="background-color: #fff;border-radius: 15px; padding: 10px;">
 		<center><h1>Purchase Tag</h1></center>
	
	<div style="padding:40px;">
		
	
	<formaction="#" method="post">

		<div>
			<h3>Personal Info</h3><hr>

			<label for="f_name">First Name: </label><input style="margin-left: 10px;" type="text" name="f_name" id="f_name" value="" tabindex="1"/><br>
			<label for="l_name">Last Name: </label><input style="margin-left: 10px;" type="text" name="l_name" id="l_name" value="" tabindex="2"/>
			
			<br><br><br><h3>Address</h3><hr>
			<label for="street" class="label_t">Street: </label><input type="text" name="street" id="street" value="" tabindex="3"/><br>
			<label for="city" class="label_t">City: </label><input type="text" name="city" id="city" value="" tabindex="4"/><br>
			<label for="state" class="label_t">State: </label>
				<select name="select-choice" id="select-choice" tabindex="5" id="state">
					<option value="Choice 1">PA</option>
					<option value="Choice 2">NJ</option>
					<option value="Choice 3">DE</option>
					<option value="Choice 3">Other</option>
				</select>
				<br>
			<label for="zip" class="label_t">Zip: </label><input type="text" name="zip" id="zip" value="" tabindex="6"/>

			<br><br><hr>
			<label for="qty_t" class="label_t">Qty Tags: </label><input type="text" name="qty_t" id="qty_t" value="" tabindex="7"/>
			<br><br>

			<label for="checkbox"><a href="#">Agree to Terms</a></label>
			<input style="margin-left: 5px;" type="checkbox" name="checkbox" id="checkbox" tabindex="8" />
	
		</div><br>
		
		<div>
			<a href="#"><button type="button" class="btn btn-success" tabindex="9">Submit</button></a>
		</div>
	</form>
</div>

	</div>
</div>
 </div>



<?php include '../view/footer.php'?>