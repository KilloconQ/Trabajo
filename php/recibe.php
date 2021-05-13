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

   //Check connection
   if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   //variables

    $email= mysqli_real_escape_string($link, $_POST['email']);
    $contrasenna= mysqli_real_escape_string($link,$_POST['password']); 
    $nombre_usuario= mysqli_real_escape_string($link,$_POST['name']);
    $fecha= mysqli_real_escape_string($link, $_POST['date']);
    $numero= mysqli_real_escape_string($link, $_POST['numero_tarjeta']);
    $calle= mysqli_real_escape_string($link, $_POST['calle']);
    $cp= mysqli_real_escape_string($link, $_POST['cp']);
    $numero = mysqli_real_escape_string($link, $_POST['numero']);
    $estado= mysqli_real_escape_string($link, $_POST['estado']);
    $colonia= mysqli_real_escape_string($link, $_POST['colonia']);
    $ciudad= mysqli_real_escape_string($link, $_POST['ciudad']);
    $numero_tarjeta = mysqli_real_escape_string($link, $_POST['numero_tarjeta']) ;
    $select = "SELECT my_db.id_usuario FROM my_db.usuario WHERE my_db.nombre_usuario = $nombre_usuario, my_db.email = $email";
    $result = mysqli_query($link, $select);
    $row = mysqli_fetch_all($result);
    $id_numero = $row['id_numero'];

   $insert1 = "INSERT INTO my_db.usuario (nombre_usuario, email, contrasenna, nacimiento, numero_tarjeta) VALUES('$nombre_usuario', '$email', '$contrasenna', '$fecha', '$numero_tarjeta');";
    
    if(!mysqli_query($link, $insert1)) {
       die('Error: ' . mysqli_error($link));
    }

    echo "1 record added";

    $insert2 = "INSERT INTO my_db.direccion (id_usuario, calle, cp, numero, estado, colonia, ciudad) VALUES(, '', '', '', '', '', '');";
    
    if(!mysqli_query($link, $insert2)) {
       die('Error: ' . mysqli_error($link));
    }

    echo "1 record added";
    
    mysqli_close($link);
   //echo "<p>$email, $contrasenna, $nombre_usuario, $fecha, $numero_tarjeta, $calle, $cp, $numero, $estado, $colonia, $numero_tarjeta</p>";
//   header("Location: index.php");*/
?>