<?php include '../common/configuration.php';?>
<?php include '../view/header.php';
   
	
	$user_fname = $_SESSION['firstname'];
	$user_lname = $_SESSION['lastname'];
    


	$user_id = $_SESSION['user_id'];
	
        $price = 0;
        $quick_id = filter_input(INPUT_GET, 'quick_id', FILTER_VALIDATE_INT);
        
        if($quick_id == 1)
        {
            $beachid = 5;
            $price = 25;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'seasonal';"
                        . "document.getElementById('tag_price').value = '$25';"
                    . "} "
            . ")";
            echo "</script>";
        }
        if($quick_id == 2)
        {
            $beachid = 5;
            $price = 15;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'weekly';"
                        . "document.getElementById('tag_price').value = '$15';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        if($quick_id == 3)
        {
            $beachid = 11;
            $price = 25;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'seasonal';"
                        . "document.getElementById('tag_price').value = '$25';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        if($quick_id == 4)
        {
            $beachid = 11;
            $price = 15;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'weekly';"
                        . "document.getElementById('tag_price').value = '$15';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        if($quick_id == 5)
        {
            $beachid = 1;
            $price = 25;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'seasonal';"
                        . "document.getElementById('tag_price').value = '$25';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        if($quick_id == 6)
        {
            $beachid = 1;
            $price = 15;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'weekly';"
                        . "document.getElementById('tag_price').value = '$15';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        if($quick_id == 7)
        {
            $beachid = 6;
            $price = 25;
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'seasonal';"
                        . "document.getElementById('tag_price').value = '$25';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        if($quick_id == 8)
        {
            $beachid = 6;
            $price = 15;            
            
            echo "<script type='text/javascript'>";
            echo "$(document).ready"
            . "("
                . "function changeDrop()"
                    . "{"
                        . "document.getElementById('tags').value = 'weekly';"
                        . "document.getElementById('tag_price').value = '$15';"
                    . "} "
            . ")";
            echo "</script>";
            
        }
        
        //$beach_info = getBeachInfo($beachid);
        
        //echo $beach_info;
        
        //echo $quick_id;


?>
 
 <div class="part7">
<div class="container">


        <div class="mainstuff">    
            <div class="header" style="padding: 0px 20px 0px 20px;">
                <center>
                    <h1 style="font-weight: bolder; color:rgba(5,56,107,.9);">Purchase</h1>
                </center><hr>
            </div>  

		
	<div id="content" style="padding: 0px 60px 40px 60px;">

				<form action="index.php" method="post">
					<div class="inputWithIcon">
						<h3>Personal Info</h3>

				<hr>	
						<table>
							<tr>
								<td class="tag_buy_table"><label for="f_name" >First Name: </label></td>
								<td class="tag_buy_table"><input type="text" required="on" name="f_name" id="f_name" size="30" maxlength="100" value="<?php echo ucfirst($user_fname) ?>" tabindex="1"></td>
							</tr>
							<tr>
								<td class="tag_buy_table"><label for="l_name" >Last Name: </label></td>
								<td class="tag_buy_table"><input type="text" name="l_name" id="l_name" size="30" maxlength="100" value="<?php echo ucfirst($user_lname); ?>" tabindex="2"></td>
							</tr>
						</table>
			                       
				<hr><br>
			                        
			            <h3>Card Information</h3><hr>

						<label for="cards" class="label_t">Type: </label>
							<select name="card_type" tabindex="3" id="cards" >
								<option value="Visa">Visa</option>
								<option value="MasterCard">MasterCard</option>
								<option value="Discover">Discover</option>
							</select><br><br>
			
					<table cellpadding="10;">
						<tr>
							<td class="tag_buy_table"><label for="name_card" class="label_t">Name on Card: </label></td>
							<td class="tag_buy_table"><input type="text" name="card_nameon" id="name_card" size="30" value="" tabindex="4"/></td>
						</tr>

						<tr>
							<td class="tag_buy_table"><label for="card_num" class="label_t">Number: </label></td>
							<td class="tag_buy_table"><input type="text" name="card_num" id="card_num" size="30" value="" tabindex="5"/></td>
						</tr>

						<tr>
							<td class="tag_buy_table"><label for="card_exp" class="label_t">Exp: </label></td>
							<td class="tag_buy_table"><input type="text" name="card_exp" id="card_exp" size="15" value="" tabindex="6"/></td>
						</tr>
					</table>

				<hr><br>
			              
                                <h3>Tag Information</h3><hr>

						<label for="tags" class="label_t">Type: </label>
							<select name="tag_type" tabindex="3" id="tags" >
								<option value="daily">Daily</option>
								<option value="weekly">Weekly</option>
								<option value="seasonal">Seasonal</option>
							</select><br><br>
			
					<table cellpadding="10;">
                                                <tr>
							<td class="tag_buy_table"><label for="tag_qty2" class="label_t">Qty Tags: </label></td>
							<td class="tag_buy_table"><input type="text" name="tag_qty2" id="tag_qty" size="10" value="" tabindex="7"/></td>
						</tr>
					</table>

				<hr><br>
                                
			            <h3>Beach Information</h3><hr>

				<h4 style="margin-top: 0;"><?php echo $beach_info['beach_name']; ?></h4>

					<div style="padding-top: 5px;">
						<h4 style="color: black; font-size: 1.0em"><b>Location: </b><?php echo $beach_info['beach_location']; ?></h4>

						<p style="color: black; text-align: justify;font-size: .95em"><b>Why it's awesome: </b><?php echo $beach_info['beach_desc']; ?></p>
					</div>
					<div>
					    <center><img width="211px" height="170px" src="<?php echo $beach_info['beach_img']; ?>" alt="cape_may"></center>
					</div>


					<a href="<?php echo $base_path . '/beaches' ?>"><button type="button" class="btn btn-info btn-md" style="margin-top: 20px;">Go Back</button></a>
                                        
                                       

				<br><hr>

						<label for="checkbox"><a href="#">Agree to Terms</a></label>
						<input style="margin-left: 5px;" type="checkbox" name="checkbox" id="checkbox" tabindex="8" />
				
					</div><br>
					
					<div>
						<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
						<input type="hidden" name="beach_id" value="<?php echo $beach_id; ?>">
						<button type="Submit" name="submit" class="btn btn-success btn-lg" tabindex="9">Submit</button>
					</div>
				</form></div>
		</div>
    
	</div>
</div>


<?php include '../view/footer.php'?>