<?php
include '../common/configuration.php';
include '../model/database.php';
include '../common/functions.php';

include '../model/beach_db.php';


if (isset($_GET['beachmapinfo'])){
   $beachinfo = getBeachName();
    include 'beach_map_info.php';
    exit();
}




?>
