<?php include '../common/configuration.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/people_db.php";
session_start();


$message = '/user/index.php';

include 'user_login.php';
echo $message;
exit();

?>
