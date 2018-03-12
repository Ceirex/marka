<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>

<div class="part5">


	<div class="jumbotron">
		<div class="container">
	  <h1 class="beach_h">Pick Your Beach</h1><br>
	  <p class="beach_p">Ocean Jersey has many beautiful beaches to choose from. Select your beach of choice from those listed below to get started.</p>
 		<br>
		<div class="beach_search">
			<input type="text" id="search-bar" placeholder="Search Beach..." >
			<a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
		</div>
	</div>

</div>

<div class="part6">
	<div class="clearflix">
		<div class="container">

			<div class="row">	
				<div class="col-lg-3 " style="margin-right: -15px; ">
                                    <img style="float: left;" width="241px" height="200px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Cape_May_Beach_Ave_from_the_sea_3.JPG/1200px-Cape_May_Beach_Ave_from_the_sea_3.JPG" alt="cape_may">
					<button type="button" class="btn btn-success btn-lg" style="margin-top: 20px;">Choose Beach</button>
				</div>
				<div class="col-lg-9" style="padding-left: 0">
					<h2 style="margin-top: 0;">Name: Cape May</h2>
					<h3>Location: Southern Point of New Jersey</h3>
					<p style="color: black">Desc: Cape May is a city and seaside resort at the tip of southern New Jersey’s Cape May Peninsula. It’s known for its grand Victorian houses such as the Emlen Physick Estate, now a museum with a preserved interior from the era. Shops and restaurants line the Washington Street Mall, 3 pedestrianized blocks of Washington Street. The Cape May Lighthouse provides views across the Delaware Bay and Atlantic Ocean.</p>
				</div>
			</div>
			<br><hr>

			<div class="row">	
				<div class="col-lg-3 " style="margin-right: -15px; ">
                                    <img style="float: left;" width="242" height="200" src="data:image/jpeg;base64,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" alt="ocean_city">
					<button type="button" class="btn btn-success btn-lg" style="margin-top: 20px;">Choose Beach</button>
				</div>
				<div class="col-lg-9" style="padding-left: 0">
					<h2 style="margin-top: 0;">Name:Ocean City New Jersey</h2>
					<h3>Location: Costal New Jersey</h3>
					<p style="color: black">Desc:Ocean City is on New Jersey's coastal Jersey Shore. The city has a string of beaches and a boardwalk with shops, eateries and amusement parks. Gillian’s Wonderland Pier offers classic rides like the Giant Wheel. Playland’s Castaway Cove features several roller coasters and themed mini-golf. To the south, Corson’s Inlet State Park, with trails and a boat launch, attracts shorebirds to its dunes and wetlands.</p>
				</div>
			</div>
			<br><hr>

			<div class="row">	
				<div class="col-lg-3 " style="margin-right: -15px; ">
					<img style="float: left;" width="242" height="200" src="http://www.armadamotel.com/wp-content/uploads/2016/01/night-sign_lg.jpg" alt="wildwood">
					<button type="button" class="btn btn-success btn-lg" style="margin-top: 20px;">Choose Beach</button>
				</div>
				<div class="col-lg-9" style="padding-left: 0">
					<h2 style="margin-top: 0;">Name: Wildwood</h2>
					<h3>Location: Southern New Jersey</h3>
					<p style="color: black">Desc:Wildwood is a resort city on the New Jersey coast. It sits on a barrier island known for its wide, sandy beaches. The iconic Sightseer tram car runs along the long Wildwood Boardwalk, which is packed with eateries, shops, waterparks and thrill rides. Fox Park is home to the Doo Wop Experience museum, with 1950s and ’60s artifacts that include a collection of neon signs.</p>
				</div>
			</div>
			<br><hr>





		</div>
	</div>


	
</div>


<?php include '../view/footer.php'; ?>

