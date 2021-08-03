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
class UsuarioController {
    
    public function __construct() {
       require_once 'Modelo/Usuario.php';
       require_once 'Modelo/Permiso.php';
    }

    public function getSession($key)
    {
      return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
  
    public function index() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            
            $data["titulos"] = "Usuarios";
            $data["usuarios"] = $usuarios->get_usuarios();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            
            if($data["usuarioLogin"]['rol'] == 1){
                $data["session"] = 1;
                require_once 'Vista/html/usuarios.php';
            } elseif($data["usuarioLogin"]['rol'] == 2){
                require_once 'Vista/html/consultarHistoricos.php';
            } else {
                require_once 'Vista/html/consultarHistoricos.php';
            }
             
        } else {
            $data["session"] = null;
            require_once 'Vista/html/login.php';
        }
    }
    
    public function nuevo(){
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        
        if($mail){
            
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            
            if($data["usuarioLogin"]['rol'] == 1){
                $data["session"] = 1;
                $data["titulos"] = "Usuarios";
                require_once 'Vista/html/usuarios_nuevo.php';
            } elseif($data["usuarioLogin"]['rol'] == 2){
                require_once 'Vista/html/consultarHistoricos.php';
            } else {
                require_once 'Vista/html/consultarHistoricos.php';
            }
        
        }
    }
    
    public function guardar(){
        
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cedula = $_POST['cedula'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $secretaria = $_POST['secretaria'];
        $subsecretaria= $_POST['subsecretaria'];
        $rol = $_POST['rol'];
        
        $usuarios = new Usuario_Model();
        // Validaciones del formulario
        
        //Create User
        $idUser = $usuarios->insertar($nombres, $apellidos, $cedula, $correo, $password, $secretaria, $subsecretaria, $rol);
        
        //Save Permisos
        $permisos = array();
        if(isset($_POST['check_recepcion'])){
            $permisos['recepcion'] = 'recepcion';
        } 
        
        if(isset($_POST['check_digitalizacion'])){
            $permisos['digitalizacion'] = 'digitalizacion';
        } 
        
        if(isset($_POST['check_reportes'])){
            $permisos['reportes'] = 'reportes';
        } 
        
        if(isset($_POST['check_ingreso'])){
            $permisos['ingreso'] = 'ingreso';
        } 
        
        if(isset($_POST['check_alistamiento'])){
            $permisos['alistamiento'] = 'alistamiento';
        } 
        
        if(isset($_POST['check_calidad1'])){
            $permisos['calidad1'] = 'calidad1';
        } 
        
        if(isset($_POST['check_consultar'])){
            $permisos['consultar'] = 'consultar';
        } 
        
        if(isset($_POST['check_indexacion'])){
            $permisos['indexacion'] = 'indexacion';
        } 
        
        if(isset($_POST['check_calidad2'])){
            $permisos['calidad2'] = 'calidad2';
        } 
        
        if(isset($_POST['check_custodia'])){
            $permisos['custodia'] = 'custodia';
        }
        
        if(isset($_POST['check_administrador'])){
            $permisos['administrador'] = 'administrador';
        }
        
        $permiso = new Permiso_Model();
        // Validaciones del formulario
        
        // Update User Model
        $permiso->insertar_permiso($permisos, $idUser);
        
        $data["titulos"] = "Usuarios";
        $this->index();
    }
    
    public function modificar($id){
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        
        if($mail){
            
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            
            $data["id"] = $id;
            $data["usuarios"] =  $usuarios->get_usuario($id);
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            
            foreach ($permisos->get_permisos($id) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
                $data[$permiso['nombre']] = $permiso['nombre'];
            }
            
            if($data["usuarioLogin"]['rol'] == 1){
                $data["session"] = 1;
                $data["titulos"] = "Usuarios";
                require_once 'Vista/html/usuarios_modifica.php';
            } elseif($data["usuarioLogin"]['rol'] == 2){
                require_once 'Vista/html/consultarHistoricos.php';
            } else {
                require_once 'Vista/html/consultarHistoricos.php';
            }
        }
        
        
        
    }
    
    public function actualizar(){
              
               
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cedula = $_POST['cedula'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $secretaria = $_POST['secretaria'];
        $subsecretaria= $_POST['subsecretaria'];
        $rol = $_POST['rol'];
        
        $usuarios = new Usuario_Model();
        // Validaciones del formulario
        
        // Update User Model
        $usuarios->modificar($id, $nombres, $apellidos, $cedula, $correo, $password, $secretaria, $subsecretaria, $rol);
        
        //Save flujos documentales
        $permisos = array();
        if(isset($_POST['check_recepcion'])){
            $permisos['recepcion'] = 'recepcion';
        } 
        
        if(isset($_POST['check_digitalizacion'])){
            $permisos['digitalizacion'] = 'digitalizacion';
        } 
        
        if(isset($_POST['check_reportes'])){
            $permisos['reportes'] = 'reportes';
        } 
        
        if(isset($_POST['check_ingreso'])){
            $permisos['ingreso'] = 'ingreso';
        } 
        
        if(isset($_POST['check_alistamiento'])){
            $permisos['alistamiento'] = 'alistamiento';
        } 
        
        if(isset($_POST['check_calidad1'])){
            $permisos['calidad1'] = 'calidad1';
        } 
        
        if(isset($_POST['check_consultar'])){
            $permisos['consultar'] = 'consultar';
        } 
        
        if(isset($_POST['check_indexacion'])){
            $permisos['indexacion'] = 'indexacion';
        } 
        
        if(isset($_POST['check_calidad2'])){
            $permisos['calidad2'] = 'calidad2';
        } 
        
        if(isset($_POST['check_custodia'])){
            $permisos['custodia'] = 'custodia';
        }
        
        if(isset($_POST['check_administrador'])){
            $permisos['administrador'] = 'administrador';
        }
        
        $permiso = new Permiso_Model();
        // Validaciones del formulario
        
        // Update User Model
        $permiso->insertar_permiso($permisos, $id);
        
        
        $data["titulos"] = "Usuarios";
        $this->index();
    }
    
    public function eliminar($id){
        
        $usuarios = new Usuario_Model();
        $permisos = new Permiso_Model();
        
        $permisos->eliminar_permisos($id);
        $usuarios->eliminar($id);
        $data["titulos"] = "Usuarios";
        $this->index();
    }
    
}


?>
