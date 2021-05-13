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

   <div class="main container">
        <h1 class="titulo">Bienvenido Administrador</h1><br>

        <div class="container">
            <h3 style="text-align: center;">Historial de compras</h3>
            <table class="table">
                <thead>
                    <th >Usuario</th>
                    <th >Producto</th>
                    <th>Precio</th>
                </thead>
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
       
       $sql = mysqli_query($link,'SELECT email, nombre_producto, precio 
                            FROM usuario AS u, producto AS p, historial AS h 
                            WHERE h.id_producto = p.id_producto AND h.id_usuario = u.id_usuario;');
       while($row = mysqli_fetch_array($sql)){
            echo "<tr>";
            echo "<td>". $row['email'] ."</td>";
            echo "<td>". $row['nombre_producto'] ."</td>";
            echo "<td>$". $row['precio'] ."</td>";
            echo "</tr>";
       }

       mysqli_close($link);

       ?>
            </table>
    
        </div>
        

        <hr >

        <div class="container">
            <h3 style="text-align: center;">Añadir producto</h3>
                <form action="#" method="post" id="login_form">
                    <div class="form-group">
                        <label for="Nombre de Producto">Nombre de producto</label>
                        <input type="text" class="form-control" id="nombre_producto" name="data[nombre_producto]" placeholder="Nombre de producto" required>
                    </div>
                    <div class="form-group">
                        <label for="Fabricante">Fabricante</label>
                        <input type="text" class="form-control" id="fabricante" name="data[fabricante]" placeholder="Fabricante" required>
                    </div>
                    <div class="form-group">
                        <label for="Origen">Origen</label>
                        <input type="text" class="form-control" id="origen" name="data[origen]" placeholder="Origen" required>
                    </div>
                    <div class="form-group">
                       <label for="Cantidad">Cantidad a añadir</label>
                       <input type="number" class="form-control" id="cantidad" name="data[cantidad]"  required>
                    </div>
                    
                    <input type="submit" name="submit" class="submit btn btn-success" value="Añadir" id="submit_data" />   
                </form>
        </div>
    </div>
   

</body>
</html>