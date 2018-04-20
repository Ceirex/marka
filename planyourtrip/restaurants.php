<?php include '../view/header.php'; ?>


    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;

      function initMap() {
        // Create the map.
        var pyrmont = {lat: 38.988914, lng: -74.819824};
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 10
        });

        // Create the places service.
        var service = new google.maps.places.PlacesService(map);
        var getNextPage = null;
        var moreButton = document.getElementById('more');

        moreButton.onclick = function() {
          moreButton.disabled = true;
          if (getNextPage) getNextPage();
        };

        // Perform a nearby search.
        service.nearbySearch(
            {location: pyrmont, radius: 2000, type: ['restaurant']},
            function(results, status, pagination) {
              if (status !== 'OK') return;

              createMarkers(results);
              moreButton.disabled = !pagination.hasNextPage;
              getNextPage = pagination.hasNextPage && function() {
                pagination.nextPage();
              };
            });

      }


      function createMarkers(places) {
        var bounds = new google.maps.LatLngBounds();
        var placesList = document.getElementById('places');
        var marker;

        for (var i = 0, place; place = places[i]; i++) {
          var image = {
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(25, 25)
          };

          var marker = new google.maps.Marker({
            map: map,
            icon: image,
            title: place.name,
            position: place.geometry.location
          });

          var li = document.createElement('li');
          li.textContent = place.name;
          placesList.appendChild(li);

          bounds.extend(place.geometry.location);
        }
        map.fitBounds(bounds);
      }




    </script>


<div class="part10">

	<div class="jumbotron jumbotron-fluid" style="background-color: #eee;margin-bottom: 0px;">
	  <div class="container" style="background-color: rgba(0,0,0,.1);padding: 30px;border-radius: 30px;">
		
		<div class="resheader">
			<img src="https://cdn2.iconfinder.com/data/icons/map-locations-flat-pixel-perfect/64/pin-map-location-19-512.png" height="150" width="100" /><h1 style="color: #05386B">Restaurants</h1>
		</div>
	    
		<div class="resp" style="clear: both;padding: 25px 10px 20px 10px">
			    <p class="lead" style="color: #05386B">Don't go forgot to plan out where you eat. Going hungary sucks, browse the awesome restaurant near the beach you are planning to visit.</p><br>
			    <a class="btn btn-success btn-lg" href="#map" role="button">Get Started</a><br>
			  </div>	
		</div>

	</div>

    <div id="map"></div>
    <div id="right-panel">
      <center><h2 class="mappanel">Results</h2></center>
      <ul id="places"></ul>
      <button id="more" class="btn btn-primary btn-block" style="margin-top: 10px;margin-bottom: 0px;">More results</button>
    </div>

</div>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPSLePKhBDvU4neGCyZLSxvz6M9lmtoys&libraries=places&callback=initMap" async defer></script>



<?php include '../view/footer.php'; ?>