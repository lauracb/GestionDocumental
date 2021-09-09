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
    <title>Login</title>
 </head>
 <body>

  <!---Barra de navegación-->
  <nav class="navbar navbar-expand-lg navbar-light navegationBar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <i class="far fa-file-alt docIcon"></i>
      <a class="navbar-brand title-navbar" href="<?php echo $data['session'] ? 'index.php?c=Home&a=session' : 'index.php'?>">Gestión documental</a>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Hola <?php echo $data["usuarioLogin"]['nombres']; ?></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?c=Login&a=logout">Salir</a>
          </li>
        </ul>
    </div>
    </div>
  </nav>
<!---Fin Barra de navegación-->

<!---Contenido-->
<div class="container">
  <div class="row">
    <?php if($data["usuarioLogin"]['rol'] == 1): ?>
    <div class="col-md-3 containerLogin loginImg">
        <div class="">
            <h2><a href="index.php?c=Usuario">Gestión de Usuarios</a></h2>
            <p>Aquí puedes realizar un control de todos los usuarios de la aplicación.</p>
        </div>
    </div>
    <?php endif ?>
    <div class="col-md-3 containerLogin loginImg">
       <div>
           <h2><a href="index.php?c=Documento">Gestión de Documentos</a></h2>
          <p>Aquí puedes realizar la gestión documental.</p>
      </div> 
    </div>
    <div class="col-md-3 containerLogin loginImg">
        <div class="">
            <h2><a href="index.php?c=Consulta">Consultas</a></h2>
            <p>Aquí puedes realizar consulta de documentos en el inventario.</p>
        </div> 
    </div>
  </div>
</div>
<!---Fin Contenido-->

<!---Scripts Data table-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script src="Vista/js/script.js"></script>
<!---Fin Scripts Data table-->
</body>
</html>