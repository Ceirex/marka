<?php 
	include '../common/configuration.php';	
	include '../model/database.php';
	include "../model/user_db.php";
?>


<?php 

$message = "";

if (!isset($message_signup)){
	$message_signup = "";
}

	if (isset($_GET['logout'])){
		header('Location: ../user/user_logout.php');
	    exit();
	}

	if (isset($_GET['signup'])){
		include 'user_signup.php';
		exit();
	}

	if (isset($_POST['submit'])){
	    $username = filter_input(INPUT_POST,'username');
	    $password = filter_input(INPUT_POST,'password');
	    $login_status = checklogin($username,$password);
	    
	    if (!empty($login_status)){
	        session_start();
	        $_SESSION['LOGGED_IN']='OK';
	        $_SESSION['user_id'] = $login_status['id'];
	        $_SESSION['firstname'] =  $login_status['firstname'];
	        $_SESSION['lastname'] =  $login_status['lastname'];

	        header('Location: ../beaches');
	        exit();
	    }else{
	    	$message = '<i class="fa fa-times-circle fa-lg fa-fw" aria-hidden="true"></i>';
	    	$message .= " Incorrect Username and Passowrd";
	    }
	} 

	if (isset($_POST['register'])){
		$firstname = filter_input(INPUT_POST,"firstname");
		$lastname = filter_input(INPUT_POST,"lastname");
		$username = filter_input(INPUT_POST,"username");
		$password = filter_input(INPUT_POST,"password");
		$repassword = filter_input(INPUT_POST,"repassword");
		$email = filter_input(INPUT_POST,"email");
		$phone = filter_input(INPUT_POST,"phone");

		$result_reguser = registeruser($firstname,$lastname,$username,$password,$email,$phone);
		$message_signup = "You have singed up successfully";
	}



include 'user_login.php';
exit();
?>




