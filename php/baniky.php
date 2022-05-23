
<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
        $servername = "23.88.3.185";
        $db_jmeno = "unbany";
        $db_heslo = "hovnohustyfaktjenejlepsi512";
        
        
         $db = mysqli_connect('23.88.3.185', 'unbany', 'hovnohustyfaktjenejlepsi512', 'unbany');


         $sebrat = 'SELECT id, jmeno, jmenod, hovno FROM unbany ';
         $veciztoho = mysqli_query($db, $sebrat);
         $baniky = mysqli_fetch_all($veciztoho, MYSQLI_ASSOC);

         mysqli_free_result($baniky);

         


?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="Vex RP">
    <meta name="author" content="Wrenčos">


    <title>VexRP</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
    <link rel="icon" href="images/512x512.png">
    <style>
        * {
            overflow: hidden;
        }

        header {
            overflow: auto;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">

   <div>
       <?php 


       if(isset($_POST['vymazatvse'])){

        $vymazatvse = "DELETE FROM unbany";

        if (mysqli_query($db, $vymazatvse)) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }


       }
       ?>
   </div>
    
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    

    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="logout.php">ODHLÁSIT SE <span class="sr-only">(current)</span></a>
                </li>


            </ul>
        </div>
    </nav> 

    <header id="header" class="header" style="height:100%">
        <div class="header-content">
            <div class="container">
            <a href="vymazatvse.php" class="btn btn-danger" style="text-decoration: none;">Vymazat Vše</a>
                <div class="row" style="display:flex;">
                    <?php foreach($baniky as $banik){ ?>
                        <div class="col-12 black" style="margin:15px;">
                            <div class="card">
                            <div class="card-body">
                                <h5 style="color:black" class="card-title"><i>Jméno hráče:</i> <?php echo htmlspecialchars($banik['jmeno']);?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><i>Důvod banu:</i> <?php echo htmlspecialchars($banik['jmenod']);?></h6>
                                <p style="color:black" class="card-text center" style="text-align:center;"><i>Obhajoba:</i> <?php echo htmlspecialchars($banik['hovno']);?></p>
                                <a href="vymazat.php?id=<?php echo $banik['id']; ?>" class="btn btn-danger" style="text-decoration: none;">Vymazat</a>

                                
                            </div>
                            </div>
                            
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div> 
    </header> 





    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="http://vexrp.eu/">VexRP</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>