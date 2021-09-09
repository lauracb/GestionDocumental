  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <!---Estilos-->
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <!---DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!---Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!---Iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Ver Históricos</title>
 </head>
 <body>

  <!---Barra de navegación-->
  <nav class="navbar navbar-expand-lg navbar-light navegationBar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <i class="far fa-file-alt docIcon"></i>
      <a class="navbar-brand title-navbar" href="<?php echo $data["usuarioLogin"] ? 'index.php?c=Documento' : 'index.php'?>">Gestión documental</a>
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
          <li class="nav-item ">
            <a class="nav-link" href="#">Hola <?php echo $data["usuarioLogin"]['nombres']; ?></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Salir</a>
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
            <h2>Ver Reportes</h2>
          </div>
      </div>

      <div>Busca aquí:</div>
      <div class="row">
        <div class="col-md-8">
        <input type="text" class="form-control" placeholder="Buscar por caja, proceso, nombre contribuyente, identificación, tipo de renta">
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-info"><i class="fa fa-search"></i>Buscar</button>
        </div>
      </div>
      <br><br>

      <div class="row">
        <div class="col">                
          <table id="dataTableGestion" class="table-striped" style="width:100%">
            <thead class="headDatatable">
              <tr>
                <th>Documento contribuyente</th>
                <th>Nombre contribuyente</th>
                <th>Radicado</th>
                <th>Tipo de renta</th>
                <th>tipo documental</th>
                <th>Abogado</th>
                <th>caja</th>
                <th>PDF</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1035265841</td>
                <td>Pedro Alvares</td>
                <td>58011</td>
                <td>Predial</td>
                <td>Exepcion</td>
                <td>1011</td>
                <td>CP123</td>
                <td><i class="fa fa-file-pdf"></i></td>
              </tr>
              <tr>
                <td>1136275942</td>
                <td>Carlos Romero</td>
                <td>58012</td>
                <td>Predial</td>
                <td>Sentencia</td>
                <td>1012</td>
                <td>CP124</td>
                <td><i class="fa fa-file-pdf"></i></td>
              </tr>
              <tr>
                <td>1237286043</td>
                <td>Juan Hincapie</td>
                <td>58013</td>
                <td>predial</td>
                <td>Sentencia</td>
                <td>1013</td>
                <td>CP125</td>
                <td><i class="fa fa-file-pdf"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!---Fin Contenido-->

<!---Scripts Data table-->
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script src="Vista/js/script.js" ></script>
<!---Fin Scripts Data table-->
</body>
</html>