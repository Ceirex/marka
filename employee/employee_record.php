<?php 
    
    include '../common/configuration.php';
    include '../view/header.php';
    //include '../common/configuration.php';	
    //include '../model/database.php';
    //include '../model/tags_db.php';
    //include "../model/user_db.php";



    //echo $tag_id;
    //echo '<br>';

    $userid = $_SESSION['user_id'];
    $link = 'localhost/marka/employee/index.php?tag_id=' . $tag['tag_id'];
    //print_r($tag);
?>

<div class="scan">
    <div class="container">
    <h1>Confirm Scanning</h1><br>	 
            <div class="row">
                <div class="center-div"> 
                    <?php                    
                        echo "<div class='row'>";
                            echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
                                echo "<div class='thumbnail'>";
                                    //echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data= " . $result['tag_id'] . "'>";
                                    echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . $link . "'>";
                                    //echo $result['tag_id'];
                                        echo "<div class='caption'>";
                                            echo "<center><h3>" . $tag['beach_name'] . "</h3></center>";
                                            echo "<p style='color: black'>Type: <i>" . $tag['type'] . "</i></p>";
                                            echo "<p style='color: black'>First Name: " . $tag['firstname'] . "</p>";
                                            echo "<p style='color: black'>Lastn Name: " . $tag['lastname'] . "</p>";
                                            //echo "<p><a href='#' class='btn btn-primary' role='button'>View</a>  <a href='#' class='btn btn-danger' role='button'>Remove</a></p>";
                                        echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    
                    ?>
                </div>
            <br>	
        </div>		
    </div>
</div>    
    
<div class="scan_btn">
	<div class="row">
		<div class="container">		
                    <br><div class="scan1"><a href="employee_show.php" class="btn btn-primary btn-lg" role="button">Confirm</a></div>
		</div>
	</div>
</div>


 

	 


<?php include '../view/footer.php'; ?>

