<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'config/config.php';
            require_once 'core/routes.php';
            require_once 'config/database.php';
            require_once 'Controlador/Usuario.php';
                        
            if(isset($_GET["c"])){
                
                $controlador = cargarControlador($_GET['c']);
                if(isset($_GET['a'])){
                        if(isset($_GET['id'])){
                            cargarAccion($controlador, $_GET['a'], $_GET['id']);
                        } else {
                            cargarAccion($controlador, $_GET['a']);
                        }
                    } else {
                        cargarAccion($controlador, ACCION_PRINCIPAL);
                    }
            } else {
                
                $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
                
                $accionTmp = ACCION_PRINCIPAL;
                $controlador->$accionTmp();
            }
        
        ?>
    </body>
</html>
