<?php 
	include '../common/configuration.php';	
	include '../model/database.php';
	include "../model/beach_db.php";
	include "../model/tags_db.php";
?>


<?php 

	if (isset($_POST['submit'])){
	    $uf_name = htmlentities(filter_input(INPUT_POST,'f_name'));
	    $ul_name = htmlentities(filter_input(INPUT_POST,'l_name'));
	    $card_type = htmlentities(filter_input(INPUT_POST,'card_type'));
	    $nameoncard = htmlentities(filter_input(INPUT_POST,'card_nameon'));
	    $card_num = htmlentities(filter_input(INPUT_POST,'card_num'));
	    $card_exp = htmlentities(filter_input(INPUT_POST,'card_exp'));
	    $tag_qty = htmlentities(filter_input(INPUT_POST,'card_type'));

	    $user_id = htmlentities(filter_input(INPUT_POST,'user_id'));
	    $beach_id = htmlentities(filter_input(INPUT_POST,'beach_id'));
	    
	     $tag_insert = insertTag($uf_name, $ul_name, $card_type, $nameoncard, $card_num,  $card_exp, $tag_qty, $user_id, $beach_id);


	    include 'tag_conf.php';
	    exit();
	} 


	$user_id = $_GET['userid'];
	$beach_id = $_GET['beachid'];

	if ( (isset($user_id)) && ($user_id > 0) && ($beach_id > 0) ) {
		$beach_chosen = $_GET['beachid'];
		$beach_info = getBeachInfo($beach_chosen);

		include 'tag_buy.php';
		exit();
	}

		


	include '../user/index.php';
	exit();
?>

