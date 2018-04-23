<?php 
    include '../common/configuration.php';	
    include '../model/database.php';
    include '../model/tags_db.php';
    include "../model/user_db.php";
?>


    
<?php
    

    $tag_id = filter_input(INPUT_GET, 'tag_id', FILTER_VALIDATE_INT);
    $message = '';
    
    if (!isset($message_signup))
    {
        $message_signup = "";
    }
    if (isset ($tag_id))
    {
        include 'employee_record.php';
        exit();
    }
    if (isset($_GET['logout'])){
            header('Location: ../employee/employee_logout.php');
        exit();
    }

    if (isset($_POST['submit']))
    {
        $username = filter_input(INPUT_POST,'username');
        $password = filter_input(INPUT_POST,'password');
        $login_status = checklogin2($username,$password);

        if (!empty($login_status))
        {
            session_start();
            $_SESSION['LOGGED_IN']='OK';
            $_SESSION['user_id'] = $login_status['id'];
            $_SESSION['firstname'] =  $login_status['firstname'];
            $_SESSION['lastname'] =  $login_status['lastname'];

            include 'employee_dashboard.php';
            exit();
        }
        
        else
        {
            $message = '<i class="fa fa-times-circle fa-lg fa-fw" aria-hidden="true"></i>';
            $message .= " Incorrect Username and Passowrd";
        }
    } 
        
    if (isset($_GET['scan']))
    {
        include 'employee_scan.php';
        exit();
    }

include 'employee_login.php';
exit();
?>
