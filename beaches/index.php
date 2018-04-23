<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/beach_db.php';
?>

	

<?php 

$beaches = getBeaches();
include 'beach_list.php'; 
exit();

?>


