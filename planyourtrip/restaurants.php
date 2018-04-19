<?php include '../view/header.php'; ?>

<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;

    var latit = 40.099442;
    var long = -74.932568;

      function initMap() {

        var pyrmont = {lat: latit, lng: long};

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 10
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 5000,
          type: ['store']
        }, callback);
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>

<div class="container">

<br><br><h1>Map</h1>

  <div id="map" style="height: 500px"></div>

</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPSLePKhBDvU4neGCyZLSxvz6M9lmtoys&callback=initMap"
    async defer></script>



<?php include '../view/footer.php'; ?>