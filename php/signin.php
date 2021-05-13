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


    header("Location: index.php");

?>