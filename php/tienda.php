<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheet/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Tienda</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico">
</head>
<body>
<?php
/*
$user = 'root';
$password = 'root';
$db = 'my_db';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);  

$nombre = $descripcion = $fotos = $fabricante = "";
$precio = 0;
$query = "SELECT * FROM producto";
$execute = mysqli_query($link, $query);

if($row = mysqli_fetch_array($execute)){
    $nombre = $row[1];
    $descripcion = $row[2];
    $fotos = $row[3];
    $precio = $row[4];
    $fabricante = $row[6];
}
/*echo "<p>$nombre</p>";
echo "<p>$descripcion</p>";
echo "<p>$fotos</p>";
echo "<p>$fabricante</p>";
echo "<p>$precio</p>";*/

?>
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
            <a href="cerrar.php" class="navbar-brand">
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
                                    <a href="#">Cerrar sesión</a>
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

      <!-- Productos -->
    <section class="main container">
      <?php
            $user = 'root';
            $password = 'root';
            $db = 'my_db';
            $host = 'localhost';
            $port = 3306;
            
            $link = mysqli_init();
            $success = mysqli_real_connect(
               $link, 
               $host, 
               $user, 
               $password, 
               $db,
               $port
            );
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

            $sql = mysqli_query($link,"SELECT * FROM producto;");
            while($row = mysqli_fetch_array($sql)) {
                $nombre = $row[1];
                $descripcion = $row[2];
                $fotos = $row[3];
                $precio = $row[4];
                $fabricante = $row[6];
                $cantidad = $row[5];
                if ($cantidad>=1){
                    echo "<article class='tema clearfix'>";
                    echo "   <a class=\"thumb pull-left\">";
                    echo "   <img src=". $fotos ." class='img-thumbnail'>";
                    echo "   </a>";
                    echo "<h3 class = \"producto\">" . $nombre ." </h3>";
                    echo "<p class=\"post-contenido text-justify\">";
                    echo  $descripcion;
                    echo "</p>";
                    echo "<h3 class=\"text-right\">$". $precio . "MXN</h3>";
                    echo "<em>Fabricante: <strong>". $fabricante ."</strong> </em>";
                    echo "<div class=\"text-right\">";
                    echo "<form method=\"post\" action=\"carro.php\" >";
                    echo "  <input type='hidden' value='$nombre' name='nombre'>";
                    echo "  <input type='submit' href=\"carro.php\" class=\"btn btn-primary\" value='Mandar a carrito'>";
                    echo " </input>";
                    echo "</form>";
                    echo "</div>";
                    echo "</article>";
                    echo "<hr class=\"solid\">";
                }
            }
            mysqli_close($link);   
            ?>
      
    </section>
    

</body>
</html>