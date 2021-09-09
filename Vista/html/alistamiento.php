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
    <title>Alistamiento</title>
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
                    <option value="<?php echo $permiso;?>" <?php echo $permiso == 'alistamiento' ? 'selected' : ''?>><?php echo $permiso;?></option>
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
<div class="divContainer">
  <div class="row">
    <div class="col-md-12">

      <div class="seeUser-title">
        <div class="row">
          <div class="col-md-6">
            <h2>Alistamiento</h2>
          </div>
      </div>

      <div>Busca aquí:</div>
      <div class="row">
        <div class="col-md-8">
        <input type="text" class="form-control" placeholder="Buscar aquí por código del proceso o caja">
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
                <th>id</th>
                <th>Radicado</th>
                <th>TipoDoc</th>
                <th>NombreContrat</th>
                <th>Identificacion</th>
                <th>TipoRenta</th>
                <th>EstProc</th>
                <th>Abogado</th>
                <th>N° Imagen</th>
                <th>FechaInicio</th>
                <th>FechaFin</th>
                <th>Rev</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                    <option value="">1.Activo</option>
                    <option value="saab">1.Activo</option>
                    <option value="mercedes"></option>
                    <option value="audi"></option>
                  </select>
                </td>
                <td>Juan Perez</td>
                <td>Eduardo Pérez</td>
                <td>
                  <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                    <option value="">1.Activo</option>
                    <option value="saab">1.Activo</option>
                    <option value="mercedes"></option>
                    <option value="audi"></option>
                  </select>
                </td>
                <td>
                 <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                  <option value="">1.Activo</option>
                  <option value="saab">1.Activo</option>
                  <option value="mercedes"></option>
                  <option value="audi"></option>
                </select>
              </td>
              <td>Activo</td>
              <td>JDiaz</td>
              <td>N°Imagenes</td>
              <td>FechaInicio</td>
              <td>FechaFin</td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                  <label class="custom-control-label" for="customSwitch1"></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                    <option value="">1.Activo</option>
                    <option value="saab">1.Activo</option>
                    <option value="mercedes"></option>
                    <option value="audi"></option>
                </select>
                </td>
                <td>Juan Perez</td>
                <td>Eduardo Pérez</td>
                <td>
                  <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                    <option value="">1.Activo</option>
                    <option value="saab">1.Activo</option>
                    <option value="mercedes"></option>
                    <option value="audi"></option>
                  </select>
                </td>
                <td>
                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                  <option value="">1.Activo</option>
                  <option value="saab">1.Activo</option>
                  <option value="mercedes"></option>
                  <option value="audi"></option>
                </select>
              </td>
              <td>Activo</td>
              <td>JDiaz</td>
              <td>N°Imagenes</td>
              <td>FechaInicio</td>
              <td>FechaFin</td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                  <label class="custom-control-label" for="customSwitch1"></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>
                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                    <option value="">1.Activo</option>
                    <option value="saab">1.Activo</option>
                    <option value="mercedes"></option>
                    <option value="audi"></option>
                </select>
                </td>
                <td>Juan Perez</td>
                <td>Eduardo Pérez</td>
                <td>
                  <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                    <option value="">1.Activo</option>
                    <option value="saab">1.Activo</option>
                    <option value="mercedes"></option>
                    <option value="audi"></option>
                  </select>
                </td>
                <td>
                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                  <option value="">1.Activo</option>
                  <option value="saab">1.Activo</option>
                  <option value="mercedes"></option>
                  <option value="audi"></option>
                </select>
              </td>
              <td>Activo</td>
              <td>JDiaz</td>
              <td>N°Imagenes</td>
              <td>FechaInicio</td>
              <td>FechaFin</td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1"></label>
                </div>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12 mt-3">
        Asignar código de caja <input type="text" class="mx-3"><button class="btn btn-info" type="submit" >Aceptar y enviar a Digitalización</button>  
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