<?php 
    include '../common/configuration.php';	
    include '../model/database.php';
    include '../model/tags_db.php';
    include "../model/user_db.php";
 ?>
<?php include '../view/header.php';?>

<div class="part8" style="background-color: #eee; padding-top: 75px">

	<div class="container" style="border-radius: 15px; padding: 50px;background-color: #fff;">
                
                <?php
                    $userid = $_SESSION['user_id'];

                    $results = tagPull($userid);
			echo '<h1 style="font-weight: bolder; color:rgba(5,56,107,.9);">Your Tags</h1><br>';
			echo "<div class='row'>";
                    foreach($results as $result)
                    {
                        
                        $link = 'localhost/marka/employee/index.php?tag_id=' . $result['tag_id'];
                        
                        //echo "<div class='row'>";
			echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
			echo "<div class='thumbnail'>";
		            //echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data= " . $result['tag_id'] . "'>";
                            echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . $link . "'>";
                            //echo $result['tag_id'];
					echo "<div class='caption'>";
						echo "<center><h3>" . $result['beach_name'] . "</h3></center>";
						echo "<p style='color: black'><i>" . $result['type'] . "</i></p>";
						echo "<p><a href='#' class='btn btn-primary' role='button'>View</a>  <a href='#' class='btn btn-danger' role='button'>Remove</a></p>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
                    
                    }
                echo "</div>";
                ?>
	</div>
	
</div>


<?php include '../view/footer.php';?>
