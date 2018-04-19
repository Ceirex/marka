<?php include '../common/configuration.php';?>


<?php
	
	if (isset($_GET['scan'])){
		include 'employee_scan.php';
		exit();
	}


include 'employee_dashboard.php';
exit();
 
 ?>


