<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>



		<div class="part4" style="background-color: #F9FCFE">

	<div class="top" style="background-color: #50A7E1; height: 400px;">
		
	</div>
			<div class="container" style="padding-top: px; padding-bottom: 50px; margin-top: -23%;">
				<div class="row">
					<h1 style="color: #05386B">Events</h1><br>
					<p style="font-size: 1.2em; color: #05386B">Browse the awesome events that are happing in New Jersey near beach area. NJ is a northeastern U.S. state with some 130 miles of Atlantic coast. The Jersey Shore includes notable resort towns like historic Asbury Park and Cape May, with its preserved Victorian buildings.</p style="font-size: 1.1em; color: ">
				</div><br><hr style="width: 65%;background-color: rgba(5, 56, 107, 0.4);"><br>
				<div class="row">
					
						<?php
							//print_r($events);
								
							foreach($events as $event){
								echo '<div class="col-sm-6 col-md-4 col-lg-4">';
								echo '<div class="thumbnail" style="border:none; box-shadow: 1px 2px rgba(0,0,0,0.2);">';
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

