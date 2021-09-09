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
        <title>Ingreso de índices</title>
    </head>
    <body>

        <!---Barra de navegación-->
        <nav class="navbar navbar-expand-lg navbar-light navegationBar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <i class="far fa-file-alt docIcon"></i>
                <a class="navbar-brand title-navbar" href="<?php echo $data["usuarioLogin"] ? 'index.php?c=Documento' : 'index.php' ?>">Gestión documental</a>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
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
                            <div class="col-md-12">
                                <h2>Agregar Documento</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <form class="createUser" id="nuevoIngreso" method="POST" action="index.php?c=Ingreso&a=guardar" autocomplete="off">
                                    <input type="hidden" name="idUser" value="<?php echo $data["usuarioLogin"]['idUsuario']; ?>">
                                    <div class="form-row">
                                        <div class="col">
                                            <label>No. Radicado:</label>
                                            <input type="text" class="form-control inputName" placeholder="Radicado" name="radicado" required>
                                        </div>
                                        <div class="col">
                                            <label>No. Resolución:</label>
                                            <input type="text" class="form-control inputName" placeholder="Resolucion" name="resolucion" required>
                                        </div>
                                        <div class="col">
                                            <label>Tipo Documental:</label>
                                            <select class="form-control mr-sm-2" type="text" placeholder="" name="idTipoDocumental" id="cars">
                                                <?php foreach($data["tiposDocumentales"] as $tipoDocumental): ?>
                                                    <option value="<?php echo $tipoDocumental['idTipoDocumental'];?>"><?php echo $tipoDocumental['nombre'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label>Nombre del contribuyente:</label>
                                            <input type="text" class="form-control inputName" placeholder="Nombre" name="nombre" required>
                                        </div>
                                        <div class="col">
                                            <label>Identificación:</label>
                                            <input type="text" class="form-control inputName" placeholder="Identificación" name="cedula" required>
                                        </div>
                                        <div class="col">
                                            <label>Observaciones:</label>
                                            <input type="text" class="form-control inputName" placeholder="Observaciones" name="observaciones" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label>No. Imágenes:</label>
                                            <input type="text" class="form-control inputName" placeholder="No Imágenes" name="imagenes" required>
                                        </div>
                                        <div class="col">
                                            <label>No. Folios:</label>
                                            <input type="text" class="form-control inputName" placeholder="N. Folio" name="folios" required>
                                        </div>
                                        <div class="col">
                                            <label>No. Carpeta:</label>
                                            <input type="text" class="form-control inputName" placeholder="Carpeta" name="carpeta" required>
                                        </div>
                                    </div>

                                    <div class="inputBtnCreate">
                                        <button type="submit" class="btn btn-info" name="guardar" id="guardar">Agregar</button>
                                        <a href="index.php?c=Documento&a=ingreso" class="btn btn-danger" style="float: right;margin-left: 5px;" type="submit">Salir</a>
                                    </div>
                                </form>
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