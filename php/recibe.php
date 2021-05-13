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
  /* $email = mysqli_real_escape_string($link, $_POST['data[email]']);
   $contrasenna= mysqli_real_escape_string($link, $_POST['data[password]']);
   $nombre_usuario = mysqli_real_escape_string($link, $_POST['data[name]']);
   $fecha = $_POST['data[date]']; 
   $numero_tarjeta=mysqli_real_escape_string($link, $_POST['data[numero_tarjeta]']);*/

   
   echo "<p>$email, $contrasenna, $nombre_usuario, $fecha, $numero_tarjeta, $calle, $cp, $numero, $estado, $colonia, $numero_tarjeta</p>";
//   header("Location: index.php");