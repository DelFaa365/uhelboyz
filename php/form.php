<?php 

$servername = "localhost";
$db_jmeno = "root";
$db_heslo = "";


 $db = new PDO("mysql:host=$servername;dbname=objednavky", $db_jmeno, $db_heslo);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST['poslat'])){
	$name  = $_POST['name'];
	$email = $_POST['email'];
	$time = $_POST['time'];
	$text = $_POST['text'];
	$balicek = $_POST['balicek'];

	$sql = "INSERT INTO objednavky (name, time, text, balicek, email) VALUES ('$name', '$time', '$text', '$balicek', '$email')";
	$db->exec($sql);

}

?>


<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta name="description" content="Uhel Boys Catering" />
    <meta name="author" content="DelFa" />

    <title>Uhel Boys</title>

    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i"
      rel="stylesheet"
    />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/fontawesome-all.css" rel="stylesheet" />
    <link href="../css/swiper.css" rel="stylesheet" />
    <link href="../css/magnific-popup.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/splide.min.css" />

    <link rel="icon" href="images/asi-logo.png" />

    <script src="js/splide.min.js"></script>
  </head>
  <body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
      <a class="navbar-brand" href="#">
        <!-- Add logo with size of 90*80 -->
        <img src="images/asi-logo.png" width="50" alt="" />
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
        </span>
      </div>
    </nav>

    <header id="header" class="header">
      <div class="header-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="text-container">
                <h1>
					DĚKUJEME ZA OBJEDNÁVKU
                </h1>
                <p class="p-large">Brzy se vám ovzeme na email :)</p>
                <a class="btn-solid-lg page-scroll" href="../index.html">DOMŮ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">
              Copyright © 2021 <a href="http://uhelboyz.cz/">UhelBoyz</a>
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- enf of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->

    <script>
      new Splide(".splide", {
        type: "loop",
        autoplay: true,
        drag: "free",
        focus: "center",
        autoScroll: {
          speed: 8,
        },
      }).mount();
    </script>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
  </body>
</html>
