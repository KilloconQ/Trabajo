<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/style.css">
    <title>Inicio</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico">
</head>
<body>
   <div class = "container-fluid cabecera" style = "height:200px">
    <div class="container">    
        <h1 class="titulo">BASS Cleaf</h1>
        <h2 id="slogan">Tu boutique del bajo eléctrico</h2> 
    </div>
   </div> 
   <nav class="navbar navbar-inverse navbar-static-top" role="navigation" data-spy="affix" data-offset="197">
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
                    <a href="login.php">
                        <span class="glyphicon glyphicon-user"></span>
                         Iniciar sesión 
                    </a>
                </li>
                <li>
                    <a href="registro.php">
                       <span class="glyphicon glyphicon-log-in"></span> 
                       Registrarse
                    </a>
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