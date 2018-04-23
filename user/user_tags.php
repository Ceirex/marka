<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>

<div class="part8" style="background-color: #eee; height: 650px;padding-top: 75px">

	<div class="container" style="border-radius: 15px; padding: 50px;background-color: #fff;">
                
                <?php
                    $userid = $_SESSION['user_id'];
                    
                    echo $userid;
                    
                    $result = tagPull($userid);
                    foreach($result as $results)
                    {
                        echo "<div class='row'>";
			echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
			echo "<div class='thumbnail'>";
		            echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data= " . $results['tag_id'] . "'>";
					echo "<div class='caption'>";
						echo "<center><h3>" . $results['beach_name'] . "</h3></center>";
						echo "<p style='color: black'><i>" . $result['type'] . "</i></p>";
						echo "<p><a href='#' class='btn btn-primary' role='button'>View</a>  <a href='#' class='btn btn-danger' role='button'>Remove</a></p>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
                    }
                ?>
	</div>
	
</div>


<?php include '../view/footer.php';?>
