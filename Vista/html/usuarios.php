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
    <title><?php echo data["$titulos"]; ?></title>
 </head>
 <body>

  <!---Barra de navegación-->
  <nav class="navbar navbar-expand-lg navbar-light navegationBar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <i class="far fa-file-alt docIcon"></i>
      <a class="navbar-brand title-navbar" href="<?php echo $data['session'] ? 'index.php?c=Usuario' : 'index.php'?>">Gestión documental</a>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <?php if(isset($data["permisos"])):?>
                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                  <?php foreach($data["permisos"] as $permiso):?>
                    <option value="<?php echo $permiso;?>" <?php echo $permiso == 'administrador' ? 'selected' : ''?>><?php echo $permiso;?></option>
                  <?php endforeach;?>
                </select>
            <?php endif;?>
          </li>
          <li class="nav-item">
            <select class="form-control mr-sm-2" type="text" placeholder="" disabled="true" name="cars" id="cars">
                <option value="<?php echo $data["usuarioLogin"]['rol'];?>"><?php echo $data["usuarioLogin"]['rol'] == 1 ? 'Administrador' : 'Contratista';?></option>
          </select>
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
    <div class="col-md-12">

      <div class="seeUser-title">
        <div class="row">
          <div class="col-md-6">
            <h2>Ver usuarios</h2>
          </div>
          <div class="col-md-6 creatBtnUser">
            <a href="index.php?c=Usuario&a=nuevo" type="button" class="btn btn-info">Crear Usuario</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">                
          <table id="dataTableGestion" class="table-striped" style="width:100%">
            <thead>
              <tr>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Cedula</th>
                  <th>Email</th>
                  <th>Opciones</th>                                              
              </tr>
            </thead>
            <tbody>
              <?php foreach($data["usuarios"] as $dato){
                  echo "<tr>";
                  echo "<td>".$dato["nombres"]."</td>";
                  echo "<td>".$dato["apellidos"]."</td>";
                  echo "<td>".$dato["cedula"]."</td>";
                  echo "<td>".$dato["correo"]."</td>";
                  echo "<td><a href='index.php?c=Usuario&a=modificar&id=".$dato["idUsuario"]."' class='btn btn-sm btn-light'>Editar</a>
                  <a href='index.php?c=Usuario&a=eliminar&id=".$dato["idUsuario"]."' class='btn btn-sm btn-light'>Eliminar</a></td>";
                  echo "</tr>";
              } ?>
            </tbody>
          </table>
        </div>
      </div>
      <br>
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