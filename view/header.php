<?php 
header('Content-Type: text/html; charset=ISO-8859-1');
session_start();

?>
<!DOCTYPE html>
<html lang="en" ng-app>
<head>
  <title>Marka</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu|Open Sans" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="<?php echo $base_path . '/css/main.css';?>">



        
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>

	<script type="text/javascript" src="<?php echo $base_path . '/js/myscript.js';?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

</head>

<body>
    
	<nav class="navbar navbar-default navbar-fixed-top">
		<div id="navbarlists" class="container" style="padding: 0px;">
				
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
				  <a class="navbar-brand" href="<?php echo $base_path; ?>">
				    <img src="<?php echo $base_path . '/images/marka-logo.png'; ?>" style=" " width="55" height="55" alt="Marak_logo">
				  </a>
			    </div>

		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

	<!-- <a class="navbar-brand" href="#">Marka</a> -->
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		      <ul class="nav navbar-nav" style="margin-left: 30%;">
				<li><a href="<?php echo $base_path; ?>">Home</a></li>
				<li><a href="<?php echo $base_path . '/beaches' ?>">Beaches</a></li>

			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan Your Trip<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="<?php echo $base_path . '/planyourtrip?activities'; ?>">Activities</a></li>
			            <li><a href="<?php echo $base_path . '/planyourtrip?events'; ?>">Events</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="<?php echo $base_path . '/planyourtrip?restaurants'; ?>">Restaurants</a></li>
			          </ul>
			        </li>
		      </ul>

		      <ul class="nav navbar-nav navbar-right">
                
                        <li>
                            <a href="<?php echo $base_path . '/employee/index.php'; ?>">Employee [TEST]</a>
                        </li>
                	
		        <?php 
		        	if (isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == "OK") {
		       
				       echo '
				       		<li class="dropdown" class="usermenu">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, ' . ucwords($_SESSION["firstname"]) . '<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Your Account</a></li>
					            <li><a href="' . $base_path . '/user/user_menu.php">Your Tags</a></li>
					            <li role="separator" class="divider"></li>
								<li><a href="' . $base_path .'/user/index.php?logout">Sign Out</a></li>
					          </ul>
					        </li>';
		        	}else {
		        		echo '<li class="nav_useroptions">
	                            <a style="padding-top: 0px;padding-right: 0px;padding-bottom:2px;" href="' . $base_path . '/user">
	                            <button type="button" class="btn btn-link" style="color: #EDF5E1;">Sign In </button></a>
	           				  </li>';
	           			echo '<li class="nav_useroptions">
								<a style="padding-top: 0px;padding-right: 0px;padding-bottom:2px;" href="'. $base_path . '/user?signup">
						        	<button type="button" class="btn btn-success">Sign Up</button>
								</a>
							  </li>';
		        	}
		        ?>


		      </ul><br>




		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->

		</div>
	</nav>

    <main>

