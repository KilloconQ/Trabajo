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
    <title>Registro</title>
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

 
   <div class="container">
        <h1>Registro de usuarios</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    <form method="post" action="" id="registration_form">
        <fieldset>
            <h2>Crea tu cuenta</h2>    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="data[email]" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />                         
        </fieldset>
        <fieldset>
            <h2>Agregar detalles personales</h2>
            <div class="form-group">
                <label for="user_name">Nombre de Usuario</label>
                <input type="text" name="data[user_name]" id="uname" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="date">Fecha de nacimiento</label>
                <input type="date" value="2021-05-13" id="fecha">
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2>Dirección</h2>
            <div class="form-group">
              <label for="calle">Calle</label>
              <input type="text" name="data[calle]" id="street" class="form-control" placeholder="Calle" required>
            </div>
            <div class="form-group">
              <label for="cp">Código postal</label>
              <input type="text" name="data[cp]" id="cp" class="form-control" placeholder="Código postal" required>>
            </div>
            <div class="form-group">
              <label for="numero">Numero</label>
              <input type="text" name="data[numero]" id="numero" class="form-control" placeholder="Número" required>
            </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" name="data[estado]" id="estado" class="form-control" placeholder="Estado" required>
            </div>
            <div class="form-group">
              <label for="colonia">Colonia</label>
              <input type="text" name="data[colonia]" id="colonia" class="form-control" placeholder="Colonia" required>
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2>Datos de tarjeta</h2>
            <div class="form-group">
              <label for="numero_tarjeta">Número de tarjeta</label>
              <input type="text" name="data[numero_tarjeta]" id="numero_tarjeta" class="form-control" placeholder="Numero de tarjeta" required>
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
        </fieldset>
    </form>
   </div> 
</body>
</html>