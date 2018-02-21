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
                <a href="index.html" class="navbar-brand" color="#361203">TMTS</a>
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
    var info;
    $(document).ready(function () {
        //Initialisation de Google Maps
        var mapOptions = {
            zoom: 18,
            center: new google.maps.LatLng(47.47, -0.55)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var markers = [
        ['Jack, Delaunay','0606','j.d@g.cool', 47.4777539,-0.5658167],
        ['Jean-François, London', '0707','jf.l@coucou.lol',47.4752394,-0.5827011]
        ];
    // Display multiple markers on a map
    //var infoWindow = new google.maps.InfoWindow(), marker, i;
    // Info Window Content

    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>'+markers[0][0]+'</h3>'+
        '<p>'+markers[0][1]+'</p>' +
        '<p>'+markers[0][2]+'</p>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>'+markers[1][0]+'</h3>' +
        '<p>'+markers[1][1]+'</p>' +
        '<p>'+markers[1][2]+'</p>' +
        '</div>']];
           
        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][3], markers[i][4]);
            marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
            });

                    // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
        }
    
    
    });
    
</script>

</body>

</html>