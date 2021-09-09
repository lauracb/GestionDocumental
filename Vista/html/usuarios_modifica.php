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
    <title>Modificar <?php echo data["$titulos"]; ?></title>
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
          <li class="nav-item">
            <?php if(isset($data["permisos"])):?>
                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                  <?php foreach($data["permisos"] as $permiso):?>
                    <option value="<?php echo $permiso;?>" <?php echo $permiso == 'administrador' ? 'selected' : ''?>><?php echo $permiso;?></option>
                  <?php endforeach;?>
                </select>
            <?php endif;?>
          </li>
          <li class="nav-item selectorRol">
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
    <div class="createUser-title">
      <h2><span class="iconAddUser"><i class="fa fa-user"></i></span>Agregar usuario</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
        <form class="createUser" id="nuevoUser" method="POST" action="index.php?c=Usuario&a=actualizar" autocomplete="off">
            <input type="hidden" id="id" name="id" value="<?php echo $data["id"];?>" />
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control inputName" placeholder="Escribe Nombres" name="nombres" value="<?php echo $data["usuarios"]["nombres"];?>"  required/>
            </div>
            <div class="col">
              <input type="text" class="form-control inputName" placeholder="Escribe Apellidos" name="apellidos" value="<?php echo $data["usuarios"]["apellidos"];?>" required/>
            </div>
            <div class="col">
              <input type="text" class="form-control inputName" placeholder="Escribe Cedula" name="cedula" value="<?php echo $data["usuarios"]["cedula"];?>" required />
            </div>
            <div class="col">
              <input type="text" class="form-control inputName" placeholder="Escribe Correo electrónico" name="correo" value="<?php echo $data["usuarios"]["correo"];?>" required/>
            </div>
            <div class="col">
              <input type="password" class="form-control inputName" placeholder="Escribe contraseña" name="password" value="<?php echo $data["usuarios"]["password"];?>" required/>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <select class="form-control inputName" name="secretaria" required>
                <option>Selecciona secretaria</option>
                <option value="Hacienda" <?php echo $data["usuarios"]["secretaria"] == 'Hacienda' ? 'selected' : '';?>>Hacienda</option>
                <option value="DAP" <?php echo $data["usuarios"]["secretaria"] == 'DAP' ? 'selected' : '';?>>DAP</option>
              </select>
            </div>
            <div class="col">
              <select class="form-control inputName" name="subsecretaria" required>
                <option>Selecciona subsecretaría</option>
                <option value="Coactivo" <?php echo $data["usuarios"]["subsecretaria"] == 'Coactivo' ? 'selected' : '';?>>Coactivo</option>
                <option value="Planeación" <?php echo $data["usuarios"]["subsecretaria"] == 'Planeación' ? 'selected' : '';?>>Planeación</option>
              </select>
            </div>
            <div class="col">
              <select class="form-control inputName" name="rol" required>
                <option>Asigna un rol</option>
                <option value="1" <?php echo $data["usuarios"]["rol"] == 1 ? 'selected' : '';?>>Administrador</option>
                <option value="2" <?php echo $data["usuarios"]["rol"] == 2 ? 'selected' : '';?>>Contratista</option>
              </select>
            </div>
          </div>
          <div class="containerPermissionsUser">
            <div class="permissionsUser">Selecciona los permisos para este usuario</div>
            <div class="form-row">
              <div class="col">
                <input type="checkbox" class=" inputName" name="check_recepcion" <?php if(isset($data["recepcion"]) && $data["recepcion"] == 'recepcion') echo 'checked="checked"'; ?>>
                <label>Recepción de documentos</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_digitalizacion" <?php if(isset($data["digitalizacion"]) && $data["digitalizacion"] == 'digitalizacion') echo 'checked="checked"'; ?>>
                <label>Digitalización</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_reportes" <?php if(isset($data["reportes"]) && $data["reportes"] == 'reportes') echo 'checked="checked"'; ?>>
                <label>Ver reportes</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_ingreso" <?php if(isset($data["ingreso"]) && $data["ingreso"] == 'ingreso') echo 'checked="checked"'; ?>>
                <label>Ingreso de índices</label>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <input type="checkbox" class="inputName" name="check_alistamiento" <?php if(isset($data["alistamiento"]) && $data["alistamiento"] == 'alistamiento') echo 'checked="checked"'; ?>>
                <label>Alistamiento</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_calidad1" <?php if(isset($data["calidad1"]) && $data["calidad1"] == 'calidad1') echo 'checked="checked"'; ?>>
                <label>Control de calidad 1</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_consultar" <?php if(isset($data["consultar"]) && $data["consultar"] == 'consultar') echo 'checked="checked"'; ?>>
                <label>Consultar documentos</label>
              </div>
              <div class="col">
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <input type="checkbox" class="inputName" name="check_indexacion" <?php if(isset($data["indexacion"]) && $data["indexacion"] == 'indexacion') echo 'checked="checked"'; ?>>
                <label>Indexación</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_calidad2" <?php if(isset($data["calidad2"]) && $data["calidad2"] == 'calidad2') echo 'checked="checked"'; ?>>
                <label>Control de calidad 2</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_custodia" <?php if(isset($data["custodia"]) && $data["custodia"] == 'custodia') echo 'checked="checked"'; ?>>
                <label>Envío a custodia</label>
              </div>
              <div class="col">
                <input type="checkbox" class="inputName" name="check_administrador" <?php if(isset($data["administrador"]) && $data["administrador"] == 'administrador') echo 'checked="checked"'; ?>>
                <label>Administrar Usuarios</label>
              </div>
            </div>
          </div>
        <div class="inputBtnCreate">
          <button type="submit" class="btn btn-info" name="modificar" id="modificar">Editar</button>
          <a href="index.php?c=Usuario&a=index" class="btn btn-danger" style="float: right;margin-left: 5px;" type="submit">Salir</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!---FinContenido-->

<!---Scripts Data table-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
<script src="Vista/js/script.js"></script>
<!---Fin Scripts Data table-->

</body>
</html>