<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Laura
 */
class ConsultaController
{
  

  public function __construct()
  {
        require_once 'Modelo/Usuario.php';
        require_once 'Modelo/Permiso.php';
  } 

  public function index() {
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            
            $data["titulos"] = "Usuarios";
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
                require_once 'Vista/html/consultarHistoricos.php';             
        } else {
            $data["session"] = null;
            require_once 'Vista/html/login.php';
        }  
    }
 
}

?>
