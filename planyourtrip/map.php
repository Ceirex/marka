<?php include '../view/header.php'; ?>



<div class="container">

<br><br><h1>Map</h1>

  <div id="map" style="height: 500px"></div>

</div>

    <script>

    var latit = 39.090532;
    var long = -74.735837;

  var map;
  var infowindow;

    function initMap() {

      map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: latit, lng: long},
          zoom: 10
        });
        
        var marker = new google.maps.Marker({
          map: map,
          title: 'Hello World!',
          draggable: true,
          animation: google.maps.Animation.DROP,
      position: {lat: latit, lng: long}
        });
  }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPSLePKhBDvU4neGCyZLSxvz6M9lmtoys&callback=initMap"
    async defer></script>



<?php include '../view/footer.php'; ?>