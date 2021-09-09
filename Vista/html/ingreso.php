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
                        <li class="nav-item">
                            <?php if (isset($data["permisos"])): ?>
                                <select class="form-control mr-sm-2" type="text" placeholder="" name="cars" id="cars">
                                    <?php foreach ($data["permisos"] as $permiso): ?>
                                        <option value="<?php echo $permiso; ?>" <?php echo $permiso == 'ingreso' ? 'selected' : '' ?>><?php echo $permiso; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            <?php endif; ?>
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
                            <div class="col-md-12">
                                <h2>Formato de inventario documental</h2>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 40px;">
                                <form>
                                    <label for="fname" class="col-2">Entidad Remitente:</label>
                                    <input type="text" name="entidadRemitente" placeholder="Alcaldia de Medellín" class="col-2" style="" id="fname" name="fname">
                                    <label for="fname" class="col-2 p-3">Entidad Productora:</label>
                                    <input type="text" name="entidadProductora" placeholder="Alcaldia de Medellín" class="col-4" id="fname" name="fname"><br>
                                    <label for="fname" class="col-2">Motivo Proceso:</label>
                                    <input type="text" name="motivoProceso" placeholder="Secretaría de Hacienda"class="col-2" id="fname" name="fname">
                                    <label for="fname" class=" col-2">Oficina Productora:</label>
                                    <select class="col-3" style="padding: 2px 4px;" type="text" placeholder="" id="fname" name="fname">
                                        <?php foreach ($data["oficinas"] as $oficina): ?>
                                            <option value="<?php echo $oficina['idOficinaProductora']; ?>"><?php echo $oficina['nombre']; ?></option>
                                        <?php endforeach; ?>
                                        <br>
                                    </select>
                                    <br>
                                    <label for="fname" class="col-2" style="padding: 17px 4px;">Unidad Administrativa:</label>
                                    <input type="text" name="unidadAdministrativa" placeholder="Entrega documentos para digitalización"class="col-2" id="fname" name="fname"><br>
                                    <button class="btn btn-info" type="submit">Enviar proceso para alistamiento</button>
                                </form>
                            </div>

                            <div class="">
                                <div class="col-md-12">
                                    <a href="index.php?c=Ingreso&a=nuevo" type="button" class="btn btn-info">+</a>
                                </div>
                            </div>
                            <br><br><br>


                            <div class="row">
                                <div class="col-md-12 table-responsive tableContainer">                
                                    <table id="dataTableGestion" class="table-striped table-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Radicado</th>
                                                <th>Resolución</th>
                                                <th>Tipo Documental</th>
                                                <th>Observaciones</th>
                                                <th>N°Imagenes</th>
                                                <th>N°Folios</th>
                                                <th>N°Carpeta</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php foreach ($data["usuarioDocumentos"] as $documento): ?>
                                            
                                                    <tr>
                                                        <td>
                                                            <?php echo $documento['radicado']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $documento['resolucion']; ?>
                                                        </td>
                                                        <td>
                                                            <?php foreach($data["tiposDocumentales"] as $tipoDocumental): ?>
                                                                <?php if($tipoDocumental['idTipoDocumental'] == $documento['idTipoDocumental']):?>
                                                                    <?php echo $tipoDocumental['nombre'];?>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $documento['observaciones']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $documento['imagenes']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $documento['folios']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $documento['carpeta']; ?>
                                                        </td>
                                                        <td>
                                                            <a href='index.php?c=Ingreso&a=modificar&id=<?php echo $documento['idDocumento']; ?>' class='btn btn-sm btn-light'>Editar</a>
                                                            <a href='index.php?c=Ingreso&a=eliminar&id=<?php echo $documento['idDocumento']; ?>' class='btn btn-sm btn-light'>Eliminar</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
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