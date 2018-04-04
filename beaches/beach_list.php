<?php include '../view/header.php'; 

if (isset($_SESSION['user_id'])){	
	$user_id = $_SESSION['user_id'];
}else{
	$user_id = 0;
}

$beaches = getBeaches();
?>

	<div class="part5">
		<div class="jumbotron" style="padding-bottom: 0px;">
			<div class="container">
			  <h1 class="beach_h">Pick Your Beach</h1><br>
			  <p class="beach_p">Ocean Jersey has many beautiful beaches to choose from. Select your beach of choice from those listed below to get started.</p>
				<div class="beach_search">
					<input type="text" id="search-bar" placeholder="Search Beach..." ng-model="beach_info">
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
			

			<div data-ng-repeat="beach in beach_list | filter:beach_info">

				<div class="row"><center><h2 style="margin-top: 0;font-weight: bold"> {{beach.name}}</h2></center><br>	
					<div class="col-lg-3 col-md-3 col-sm-12" style="margin-right: -15px; ">
					                    <img style="float: left;" width="241px" height="200px" src="{{beach.img}}" alt="cape_may">
						<a href="<?php echo $base_path . '/tags?beachid={{beach.id}}&userid='. $user_id ;?>"><button type="button" class="btn btn-success btn-lg" style="margin-top: 20px;">Choose Beach</button></a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0">
						<h4 style="color: black; font-size: 1.3em"><b>Location:</b> {{beach.loc}}</h4><br>
						<p style="color: black; text-align: justify;font-size: 1.1em"><b>Why it's awesome:</b> {{beach.desc}}</p>
					</div>
				</div><hr>

			</div>


			</div>
		</div>
	</div>
</div>


<?php include '../view/footer.php'; ?>