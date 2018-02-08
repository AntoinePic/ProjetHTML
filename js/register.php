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


</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

	<!-- =========================
     PRE LOADER       
============================== -->
	<div class="preloader">

		<div class="sk-rotating-plane"></div>

	</div>
	<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="register" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
                <h2>Register Here</h2>
                <h3>Afin d'accéder au service de covoiturage, nous vous invitons à créer un compte.</h3>
                <p>Il vous permettra de vous enregistrer sur les covoiturages disponibles ou de proposer votre covoiturage.</p>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
                <form action="" method="get">
                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name" value="<?php echo $_GET['firstname']; ?>">
                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" value="<?php echo $_GET['lastname']; ?>">
                    <input name="phone" type="telephone" class="form-control" id="phone" placeholder="Phone Number" value="<?php echo $_GET['phone']; ?>">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" value="<?php echo $_GET['email']; ?>">
                    <input name="age" type="age" class="form-control" id="age" placeholder="Age">
                    <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                        <input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
                    </div>
                </form>
            </div>

            <div class="col-md-1"></div>

        </div>
    </div>
</section>
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

</body>

</html>