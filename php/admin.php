<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Administrador</title>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico">
</head>
<body>
    <div class = "container-fluid cabecera" style = "height:200px">
    <div class="container">    
        <h1 class="titulo">BASS Clef</h1>
        <h2 id="slogan">Tu boutique del bajo eléctrico</h2> 
    </div>
   </div> 

   <nav class="navbar navbar-inverse" role="navigation" data-offset="197">
    <div class="container">
        <div class="navbar-header" id="logo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm" aria-expanded="false">
                <span class="sr-only">Desplegar/Ocultar Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">
                <img src="../images/bass-cleff.jpg" alt="Brand" height="30" > 
            </a>
            
        </div>
        <!-- Menú -->
        <div class="collapsed navbar-collapse" id="navegacion-fm">
            <ul class = "nav navbar-nav">
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="tienda.php">Tienda</a>
                </li>
            </ul>
            <ul class = "nav navbar-nav navbar-right">
                <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            <span class="glyphicon glyphicon-user"></span>
                            <span class="caret"></span>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="login.php">Iniciar sesión</a>
                                </li>
                                <li>
                                    <a href="registro.php">Registrarse</a> 
                                </li>
                                <li>
                                    <a href="usuario.php">Usuario</a>
                                </li>
                                <li>
                                    <a href="cerrar.php">Cerrar sesión</a>
                                </li>
                            </ul>
                        </a>
                </li>
                </li>
                <li>
                    <a href="carro.php">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
   </nav>

   
</body>
</html>