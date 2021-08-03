<?php

?>  
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <!---Estilos-->
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <!---DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!---Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!---Iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Register</title>
 </head>
 <body>

  <!---Barra de navegación-->
  <nav class="navbar navbar-expand-lg navbar-light navegationBarRegister">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <i class="far fa-file-alt docIcon"></i>
      <a class="navbar-brand title-navbar" href="index.php">Gestión documental</a>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home |</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="index.php?c=login">Ingresar |</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="index.php?c=registro">Registrarse</a>
          </li>
        </ul>
    </div>
    </div>
  </nav>
<!---Fin Barra de navegación-->

<!---Contenido-->
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 containerLogin RegisterImg">
        <div class="register-title">
          <h2>Registro</h2>
        </div>
      <form method="POST" action="index.php?c=Registro&a=signup" autocomplete="off">
        <div class="form-row">
          <div class="col-md-1"><i class="fa fa-user registerIcon"></i></div>
          <div class="col">
            <input type="text" class="form-control inputName" placeholder="Nombres" name="nombres" required>
          </div>
          <div class="col">
            <input type="text" class="form-control inputName" placeholder="Apellidos" name="apellidos" required>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-1"><i class="fa fa-id-card registerIcon"></i></div>
          <div class="col-md-11">
              <input type="text" class="form-control inputName" placeholder="Cédula" name="cedula" required>
          </div>
        </div>
          
        <div class="form-row">
          <div class="col-md-1"><i class="fa fa-envelope registerIcon"></i></div>
          <div class="col-md-11">
              <input type="text" class="form-control inputName" placeholder="Correo electrónico" name="correo" required>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-1"><i class="fa fa-briefcase registerIcon"></i></div>
          <div class="col">
            <select class="form-control inputName" placeholder="Secretaria" name="secretaria" required>
              <option>Secretaria</option>
              <option value="Hacienda">Hacienda</option>
              <option value="Planeación">Planeación</option>
            </select>
          </div>
          <div class="col">
            <select class="form-control" placeholder="Subsecretaria" name="subsecretaria" required>
              <option>Subsecretaría</option>
              <option value="Coactivo">Coactivo</option>
              <option value="DAP">DAP</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-1"><i class="fa fa-key registerIcon"></i></div>
          <div class="col">
            <input type="password" class="form-control inputName" placeholder="Contraseña" name="password" required>
          </div>
          <div class="col">
            <input type="password" class="form-control inputName" placeholder="Confirma contraseña" name="passwordReconfirm" required>
          </div>
        </div>

        <button type="submit" class="btn btn-info inputBtnSend" name="save">Registrarse</button>
      </form>
      <div class="textCreatePassword">Si no tienes una cuenta <a href="index.php?c=login">Haz clic para ingresar</a></div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<!---Fin Contenido-->

<!---Scripts Data table-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script src="Vista/js/script.js"></script>
<!---Fin Scripts Data table-->
</body>
</html>