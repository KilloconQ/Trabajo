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
      <!-- Inicio de sesión -->
     <div class="container">
          <h1 class="titulo">Iniciar sesión</h1>
          <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post" id="login_form">
          <div class="form-element">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                  <label for="inputPassword">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
              </div>
              <button type="submit" name="login" value="login" style="background-color:#333">Iniciar sesión</button>
          </form>
     </div>
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

       $email = $_POST['email'];
   $contrasenna = $_POST['password'];

if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
    $sql = mysqli_query($link,"SELECT email FROM usuario WHERE email = '$email'");
    $sql2 = mysqli_query($link, "SELECT contrasenna FROM my_db.usuario WHERE contrasenna = '$contrasenna' ");
    if ($SERVER["REQUEST_METHOD"] == "POST"){
        if(mysqli_num_rows($sql) > 0){
        if(mysqli_num_rows($sql2) > 0) {
            echo "Existe el usuario";
            session_start();

        }else{
            echo "No existe: primer else";
        }

    } else {
            echo "No existe: segundo else";
    }
    }
       
    
    $cantidad = $_POST['cantidad'];
    $nombre = $_POST['nombre'];
    
    $select = mysqli_query($link, "SELECT id_usuario FROM usuario WHERE email = '$email' AND contrasenna = '$contrasenna'");
    $row1 = mysqli_fetch_array($select);
    $id_usuario = $row1['id_usuario']; 

    $sql3 = mysqli_query($link, "SELECT id_producto, cantidad FROM producto WHERE nombre_producto = '$nombre_producto'");
    $row = mysqli_fetch_array($sql3);
            $id_producto = $row['id_producto'];
            $cantidad = $row['cantidad'] - $cantidad;          
            $update = "UPDATE my_db.producto SET cantidad = $cantidad WHERE id_producto = $id_producto";

            if(!mysqli_query($link, $update)) {die('Error: ' . mysqli_error($link));}
    echo "<p style:'color:green' >Compra finalizada"; 

    $insertar =  "INSERT INTO my_db.historial
                    (id_usuario, id_producto)
                    VALUES($id_usuario, $id_producto);";

    mysqli_close($link);

     
     
     ?>
</body>
</html>