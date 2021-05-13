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

    session_start();
   $email = $_POST['email'];
   $contrasenna = $_POST['password'];

if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
    $sql1 = mysqli_query("SELECT email FROM my_db.usuario WHERE email = '$email' ;");
    $sql2 = mysqli_query("SELECT contrasenna FROM my_db.usuario WHERE = '$contrasenna' ;");
    if(mysqli_num_rows($sql) > 0){


    }



?>