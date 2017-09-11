<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Tab Logo -->
    <link rel="icon" href="img/favicon.png">
    
    <title>Probus</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="build/styles.css?"<?= filemtime('build/styles.css') ?>”>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<style type="text/css">
    .colored_backgorund_nav {
        background-color: #253A7F;
    }
</style>


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

<!-- Modals for each Image -->
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
   <!--  <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1399.8416063363131!2d54.36561321041616!3d24.49446631242122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e6660dbc3e6bf%3A0x8bc1825afef13461!2s206+Fatima+Bint+Mubarak+St+-+Abu+Dhabi!5e0!3m2!1sen!2sae!4v1504697959716" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> -->
    <style>
       #map {
        height: 600px;
        width: 100%;
       }
    </style>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 24.4987284, lng: 54.4028201};
        var uluru2 = {lat: 24.494237, lng: 54.3662776};
        var image = 'img/marker.png';

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
        scrollwheel: false,
          center: uluru,styles: [{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"23"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"color":"#f38eb0"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"color":"#ced7db"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#ffa5a8"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#c7e5c8"}]},{"featureType":"poi.place_of_worship","elementType":"geometry.fill","stylers":[{"color":"#d6cbc7"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#c4c9e8"}]},{"featureType":"poi.sports_complex","elementType":"geometry.fill","stylers":[{"color":"#b1eaf1"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"100"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffd4a5"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffe9d2"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"weight":"3.00"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"weight":"0.30"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#747474"},{"lightness":"36"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"color":"#e9e5dc"},{"lightness":"30"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":"100"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d2e7f7"}]}]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: image
        });
        var marker = new google.maps.Marker({
          position: uluru2,
          map: map,
          icon: image
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRwuWtBXAjlOg8abLCfSu_Y2dJr25MqCQ&callback=initMap">
    </script>


    <?php include 'contact_section_input_c_p.php';?>


<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
</body>

</html>
