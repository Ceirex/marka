<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>

 
		<div class="part4">
			<div class="container">
				<div class="row">
					<h1>Events</h1><br>
						<?php
							//print_r($events);
								
							foreach($events as $event){
								echo '<div class="col-sm-6 col-md-4 col-lg-4">';
								echo '<div class="thumbnail">';
								echo '<img src=' . $event['event_img'] . '>';
								echo '<div class="caption">';
								echo '<h4>' . $event['event_name'] . '</h4>';
								echo '<p class="thumbnail_p">'. $event['event_desc'] .'</p>';
								echo '<p><a href="#" class="btn btn-primary" role="button">More...</a></p></div></div></div>';
							}
						?>
					<a href="#" style="font-size: 1.5em;float: right">See More...</a>	
				</div>
			</div>
		</div>		
	 	
	 


<?php include '../view/footer.php'; ?>

