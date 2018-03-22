<?php include '../view/header.php'; 
$beach_list = getBeaches();
?>

<?php 
/*	echo '<pre>'; 
	print_r($beach_list);
	echo '</pre>';*/
?>

	<div class="part5">
		<div class="jumbotron">
			<div class="container"><br><br>
			  <h1 class="beach_h">Pick Your Beach</h1><br>
			  <p class="beach_p">Ocean Jersey has many beautiful beaches to choose from. Select your beach of choice from those listed below to get started.</p>
		 		<br>
				<div class="beach_search">
					<input type="text" id="search-bar" placeholder="Search Beach..." >
					<a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="part6">
		<div class="clearflix">
			<div class="container">

				<?php 
					foreach($beach_list as $beach){

						echo '<div class="row"><center><h2 style="margin-top: 0;font-weight: bold">' . $beach["beach_name"]  .'</h2></center><br><br>';
						echo '<div class="col-lg-3 col-md-3 col-sm-12" style="margin-right: -15px; ">';
						echo '<img style="float: left;" width="241px" height="200px" src="' . $beach["beach_img"] .'>';
						echo '<a href=" ' . $base_path . '/user' . '><button type="button" class="btn btn-success btn-lg" style="margin-top: 20px;">Choose Beach</button></a></div>';
						echo '<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0">';
						echo '<h4><b>Location:</b> '. $beach["beach_location"] .' </h4><br>';
						echo '<p style="color: black; text-align: justify;font-size: 1.2em"><b>Why its awesome:  </b> ' . $beach["beach_desc"] . '</p></div></div><hr>';	
					}
				?>



				<!-- html code to generate beach list
					<div class="row"><center><h2 style="margin-top: 0;font-weight: bold">Cape May</h2></center><br>	
					<div class="col-lg-3 col-md-3 col-sm-12" style="margin-right: -15px; ">
					                    <img style="float: left;" width="241px" height="200px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Cape_May_Beach_Ave_from_the_sea_3.JPG/1200px-Cape_May_Beach_Ave_from_the_sea_3.JPG" alt="cape_may">
						<a href="#"><button type="button" class="btn btn-success btn-lg" style="margin-top: 20px;">Choose Beach</button></a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0">
						<h4><b>Location:</b> Southern Point of New Jersey</h4><br>
						<p style="color: black; text-align: justify;font-size: 1.2em"><b>Why it's awesome:</b> Cape May is a city and seaside resort at the tip of southern New Jersey’s Cape May Peninsula. It’s known for its grand Victorian houses such as the Emlen Physick Estate, now a museum with a preserved interior from the era. Shops and restaurants line the Washington Street Mall, 3 pedestrianized blocks of Washington Street. The Cape May Lighthouse provides views across the Delaware Bay and Atlantic Ocean.</p>
					</div>
				</div><hr> -->
				



			</div>
		</div>
	</div>

<?php include '../view/footer.php'; ?>