
<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 500px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h3>Map of Cambodia</h3>
        <div id="map"></div>
        <script>
          function initMap(){
            var uluru = {lat: 12.5657, lng: 104.9910};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 7,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-VFP7WIKFcPbq4VnUoH0ybZoBsrVM-Jo&callback=initMap">
        </script>
      </div>
    </div>
  </body>
</html>
