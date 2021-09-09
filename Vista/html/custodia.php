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
    <title>Envío a custodia</title>
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
                    <option value="<?php echo $permiso;?>" <?php echo $permiso == 'custodia' ? 'selected' : ''?>><?php echo $permiso;?></option>
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
    <div class="custodia-title">
      <h2>Custodia</h2>
    </div>
  </div>

  <div class="col-md-12 custodiaContainerTab">
    <nav>
      <div class="nav nav-tabs custodiaTab" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Envío a custodia</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="col-md-3"></div>
        <div class="col-md-6 containerLoginNew loginImg">
          <form>
            <div class="form-row">
              <div class="col">Caja:</div>
              <div class="col">
                <select class="form-control inputName" placeholder="caja">
                  <option>Selecciona caja</option>
                </select>
              </div>
            </div>
    
            <div class="form-row">
              <div class="col">Entidad remitente:</div>
              <div class="col">
                  <input type="text" class="form-control inputName" placeholder="Entidad remitente">
              </div>
            </div>
    
            <div class="form-row">
              <div class="col">Bodega:</div>
              <div class="col">
                  <input type="text" class="form-control inputName" placeholder="Bodega">
              </div>
            </div>
    
            <div class="form-row">
              <div class="col">Fecha envío a custodia:</div>
              <div class="col">
                  <input type="date" class="form-control inputName" placeholder="Bodega">
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-sm inputBtnSend">Generar código de custodia</button>
          </form>
        </div>
        <div class="col-md-3"></div>
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