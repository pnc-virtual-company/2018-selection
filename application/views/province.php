
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://js.arcgis.com/3.24/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="https://js.arcgis.com/3.24/esri/css/esri.css">
    <script src="https://js.arcgis.com/3.24/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-VFP7WIKFcPbq4VnUoH0ybZoBsrVM-Jo&callback=initMap"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/map-plugin/dist/locationpicker.jquery.js"></script>
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
            var marker;

            function initMap() {

              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 7,
                center: {lat:  12.5657, lng:  104.9920},
              });

              marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: {lat:  12.5660, lng:  104.9920}
              });
              marker.addListener('click', toggleBounce);
            }
            function toggleBounce() {
              if (marker.getAnimation() !== null){
                marker.setAnimation(null);
              } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
              }
            }
          </script>
        </div>
      </div>
    </body>
</html>
