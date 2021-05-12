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
</head>
<body>
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
                <input type="email" class="form-control" id="email" name="data[email]" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />                         
        </fieldset>
        <fieldset>
            <h2>Agregar detalles personales</h2>
            <div class="form-group">
                <label for="user_name">Nombre de Usuario</label>
                <input type="text" name="data[user_name]" id="uname" placeholder="Nombre">
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
              <input type="text" name="data[calle]" id="street" class="form-control" placeholder="calle" >
            </div>
            <div class="form-group">
              <label for="cp">Código postal</label>
              <input type="text" name="data[cp]" id="cp" class="form-control" placeholder="cp" >
            </div>
            <div class="form-group">
              <label for="numero">Numero</label>
              <input type="text" name="data[numero]" id="numero" class="form-control" placeholder="numero" >
            </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" name="data[estado]" id="estado" class="form-control" placeholder="estado" >
            </div>
            <div class="form-group">
              <label for="colonia">Colonia</label>
              <input type="text" name="data[colonia]" id="colonia" class="form-control" placeholder="colonia" >
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
        </fieldset>
        <fieldset>
            <h2>Datos de tarjeta</h2>
            <div class="form-group">
              <label for="numero_tarjeta">Número de tarjeta</label>
              <input type="text" name="data[numero_tarjeta]" id="numero_tarjeta" class="form-control" placeholder="numero_tarjeta" >
            </div>
            <div class="form-group">
              <label for="mes_caduca">Mes de caducidad</label>
              <input type="text" name="data[mes_caduca]" id="mes_caduca" class="form-control" placeholder="mes_caduca" >
            </div>
            <div class="form-group">
              <label for="anno_caduca">Año de caducidad</label>
              <input type="text" name="data[mes_caduca]" id="anno_caduca" class="form-control" placeholder="anno_caduca" >
            </div>
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
        </fieldset>
    </form>
   </div> 
</body>
</html>