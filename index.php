<?php
    SESSION_START();
    if(ISSET($_SESSION['usuario'])) {
        if($_SESSION['tipoUsuario']=="admin"){
            echo '<script> window.location="vista/indexAdmin.php"; </script>';
        }else{
            echo '<script> window.location="vista/indexUser.php"; </script>';
        }
    
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Soporte Tecnico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Add a gray background color and some padding to the footer */
        
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        
        .carousel-inner img {
            width: 100%;
            /* Set width to 100% */
            margin: auto;
            min-height: 100px;
        }
        /* Hide the carousel text when the screen is less than 600 pixels wide */
        
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }

    </style>
</head>

<body>
    <!--Inicia Menu-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#">Soporte Tecnico</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="vista/login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Termina Menu-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/img1.jpg" alt="Image">
                <div class="carousel-caption">

                </div>
            </div>

            <div class="item">
                <img src="img/img4.jpg" alt="Image">
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--
    <div class="container text-center">
        <h3>What We Do</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <img src="img/img3.jpg" class="img-responsive" style="width:100%" alt="Image">
                <p>Current Project</p>
            </div>
            <div class="col-sm-4">
                <img src="img/img2.jpg" class="img-responsive" style="width:100%" alt="Image">
                <p>Project 2</p>
            </div>
          <div class="col-sm-4">
                <div class="well">
                    <p>Some text..</p>
                </div>
                <div class="well">
                    <p>Some text..</p>
                </div>
            </div>
        </div>
    </div><br>
-->
    <!--<footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>-->

</body>

</html>
