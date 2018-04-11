<?php 
	include '../common/configuration.php';	
	include '../model/database.php';
	include '../model/events_db.php';
?>

<?php 

	if (isset($_GET['events'])){
		$events = getEvents();
		include 'events.php';
		exit();
	}

?>