<?php include '../view/header.php'; 

if (isset($_SESSION['user_id'])){	
	$user_id = $_SESSION['user_id'];
}else{
	$user_id = 0;
}

$beaches = getBeaches();
?>

	<div class="part5">
		<div class="jumbotron" style="padding-bottom: 0px; margin-bottom: 0px;">
			<div class="container">
			  <h3 class="beach_h"><b>Pick Your Beach</b></h3><br>
			  <p class="beach_p" style="font-size: 1.1em; color: #05386B;padding-left:25px">Ocean Jersey has many beautiful beaches to choose from. Select your beach of choice from those listed below to get started.</p>
				
				<div class="beach_search" style="padding-left: 25px;">
					<input  type="text" id="search-bar" placeholder="Search Beach..." ng-model="beach_info">
					<a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
				</div>

			</div>
		</div>
	</div>

<div data-ng-init = "beach_list=[
		<?php   
			foreach($beaches as $beach){

				echo "{name: '" . $beach['beach_name'] . "',
					   id: '" . $beach['beach_id'] . "',
					   img: '" . $beach['beach_img'] ."',
					   loc: '" . $beach['beach_location'] ."',
					   desc: '" . $beach['beach_desc'] ."'
					  },";
			} 
		?> 
	]">


<div class="part6">
		<div class="clearflix">
			<div class="container">
			
	<br>
			<div data-ng-repeat="beach in beach_list | filter:beach_info">

				<div class="row"><center><h4 style="margin-top: 0; font-weight: bold"> {{beach.name}}</h4></center>
					<div class="col-lg-3 col-md-3 col-sm-12" style="margin-right: -15px; ">
					    <img style="float: left;" width="211px" height="170px" src="{{beach.img}}" alt="cape_may">
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0">
						<h4 style="color: black; font-size: 1.1em"><b>Location:</b> {{beach.loc}}</h4><br>
						<p style="color: black; text-align: justify;font-size: .95em"><b>Why it's awesome:</b> {{beach.desc}}</p>
					</div>						<a href="<?php echo $base_path . '/tags?beachid={{beach.id}}&userid='. $user_id ;?>"><button type="button" class="btn btn-success btn-md" style="margin-top: 20px;">Choose Beach</button></a>

				</div><hr>

			</div>


			</div>
		</div>
	</div>
</div>


<?php include '../view/footer.php'; ?>