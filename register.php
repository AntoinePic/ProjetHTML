<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Take me to School</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/overcast/jquery-ui.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

    <!-- =========================
     PRE LOADER       
============================== -->
    <div class="preloader">

        <div class="sk-rotating-plane"></div>

    </div>
    <!-- =========================
     NAVIGATION LINKS     
============================== -->
    <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
        <div class="container">

            <!-- navbar header -->
            <!-- <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span> -->
                <!-- </button> -->
                <a href="#" class="navbar-brand">TMTS</a>
            </div>
        </div>
    </div>

    <div class="form-group">
            <div id="map-canvas" style="width: 100%; height: 500px"></div>
    </div>


    <!-- =========================
    FOOTER SECTION   
============================== -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 TakeMeToSchool | Emrot Arthur & Antoine Picard
                    </p>

                    <ul class="social-icon">
                        <li>
                            <a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </footer>


    <!-- Back top -->
    <a href="#back-top" class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>


    <!-- =========================
 SCRIPTS   
============================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/map.js"></script>

<script>
    var map;
    var count=0;
    var markers=[];
    $(document).ready(function () {
        //Initialisation de Google Maps
        var mapOptions = {
            zoom: 18,
            center: new google.maps.LatLng(47.47, -0.55)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        google.maps.event.addListener(map, 'click', function (event) {
            if (count===0){

            placeMarker(map, event.latLng);
            
            count=1;
            }else{
                DeleteMarkers();
                placeMarker(map, event.latLng);
            }
        });
    
    
    });
    function placeMarker(map, location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
        var infowindow = new google.maps.InfoWindow({
            content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
        });
        markers.push(marker);
        infowindow.open(map, marker);
    }
    function DeleteMarkers() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers = [];
    };
</script>

</body>

</html>