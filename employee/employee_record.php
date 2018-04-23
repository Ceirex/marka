<?php 
    
    include '../common/configuration.php';
    include '../view/header.php';
    include '../common/configuration.php';	
    include '../model/database.php';
    include '../model/tags_db.php';
    include "../model/user_db.php";



    echo $tag_id;

    $userid = $_SESSION['user_id'];

        $results = tagRecord($tag_id);
        //$link = 'localhost/marka/employee/index.php?tag_id=' . $result['tag_id'];

        foreach($results as $result)
        {

            $link = 'localhost/marka/employee/index.php?tag_id=' . $tag_id;

            echo "<div class='row'>";
            echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
            echo "<div class='thumbnail'>";
                //echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data= " . $result['tag_id'] . "'>";
                echo "<img id='qrcode' src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . $link . "'>";
                //echo $result['tag_id'];
                            echo "<div class='caption'>";
                                    echo "<center><h3>" . $result['beach_name'] . "</h3></center>";
                                    echo "<p style='color: black'><i>" . $result['type'] . "</i></p>";
                                    echo "<p style='color: black'><i>User </i></p>";
                                    echo "<p style='color: black'><i>" . $result['firstname'] . "</i></p>";
                                    echo "<p style='color: black'><i>" . $result['lastname'] . "</i></p>";
                                    echo "<p><a href='#' class='btn btn-primary' role='button'>View</a>  <a href='#' class='btn btn-danger' role='button'>Remove</a></p>";
                            echo "</div>";
                    echo "</div>";
            echo "</div>";
        }
    
?>


<div 

<div class="scan">
    <div class="container">
    <h1>Confirm Scanning</h1><br>	 
            <div class="row">
                <div class="center-div"> 
                    <h1>This is a test of the emergency broadcast system.</h1>
                </div>
            <br>	
        </div>		
    </div>
</div>    
    
<div class="scan_btn">
	<div class="row">
		<div class="container">		
                    <br><div class="scan1"><a href="employee_show.php" class="btn btn-primary btn-lg" role="button">Scan</a></div>
		</div>
	</div>
</div>


 

	 


<?php include '../view/footer.php'; ?>

