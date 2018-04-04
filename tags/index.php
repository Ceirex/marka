<?php 
	include '../common/configuration.php';	
	include '../model/database.php';
	include "../model/beach_db.php";
	include "../model/tags_db.php";
?>


<?php 

	$user_id = $_GET['userid'];
	$beach_id = $_GET['beachid'];	



	if ( (isset($user_id)) && ($beach_id > 0) ) {
		include 'tag_buy.php';
		exit();
	}

	include '../user/index.php';
	exit();
?>

