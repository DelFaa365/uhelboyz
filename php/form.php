
<?php
        $servername = "23.88.3.185";
        $db_jmeno = "unbany";
        $db_heslo = "hovnohustyfaktjenejlepsi512";
        
        
         $db = new PDO("mysql:host=$servername;dbname=unbany", $db_jmeno, $db_heslo);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

        .btn{
        display:inline-block;
        margin-top:10px;
        margin-right:2px;
        padding: 10px 25px;
        background: none;
        border:1px solid #c0c0c0;
        border-radius:2px;
        color: #666;
        font-size:1.125em;
        outline:none;
        transition: all 100ms ease-out;
        &:hover,&:focus{
          transform: translateY(-3px);
        }
        &-confirm{
        border:1px solid #2962ff;
        background: #2962ff;
        color: #fff;}
      }
    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">

   <div>
       <?php 


       if(isset($_POST['poslat'])){
           $jmeno  = $_POST['jmeno'];
           $jmenod = $_POST['jmenod'];
           $toconapsal = $_POST['hovno'];

           $sql = "INSERT INTO unbany (jmeno, jmenod, hovno) VALUES ('$jmeno', '$jmenod', '$toconapsal')";
           $db->exec($sql);

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
                    <a class="nav-link page-scroll" href="index.html">DOMŮ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#features">O NÁS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="pravidla.html"><span class="item-text">PRAVIDLA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="form.php">ŽÁDOST O UNBAN</a>
                </li>


            </ul>
        </div>
    </nav> 

    <header id="header" class="header" style="height: 100%;">
        <div class="header-content">
        <form action="form.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Žádost o unban</h1>
                    <hr class="mb-3">
                    <label for="jmeno">Tvoje jméno (Discord)</label>
                    <input type="text" class="form-control" name="jmeno" required>

                    <label for="jmenod">Postih</label>
                    <textarea name="jmenod" class="form-control"></textarea>

                    <label for="hovno">Obhajoba</label>
                    <textarea name="hovno" class="form-control"></textarea>

                    <div style="display:flex; justify-content:space-between;">
                    <input type="submit" class="btn btn-confirm" name="poslat" value="Odeslat">
                    <a href="baniky.php" class="btn btn-confirm" style="text-decoration: none; background-color:rgba(255,0,0,0.1);">Admin</a>
                    </div>
                
                </div>
                
            </div>
        </div>
    </form>
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