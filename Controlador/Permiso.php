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
class PermisoController {
    
    public function __construct() {
       require_once 'Modelo/Usuario.php';
    }

    public function listPermisos($id) {
        $usuarios = new Permiso_Model();
        $data["usuarios"] = $usuarios->get_permisos($id);
        
        return $data;
    }
    
    public function nuevo(){
        $data["titulos"] = "Usuarios";
        require_once 'Vista/html/usuarios_nuevo.php';
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
        
        $usuarios->insertar($nombres, $apellidos, $cedula, $correo, $password, $secretaria, $subsecretaria, $rol);
        $data["titulos"] = "Usuarios";
        //$this->index();
    }
    
    public function modificar($id){
        
        $usuarios = new Usuario_Model();
        
        $data["id"] = $id;
        $data["usuarios"] =  $usuarios->get_usuario($id);
        $data["titulos"] = "Usuarios";
        require_once 'Vista/html/usuarios_modifica.php';
    }
    
    public function actualizar(){
        
        echo (isset($_POST['check_recepcion']));
        
                
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
        $flujos = array();
        if(isset($_POST['check_recepcion'])){
            $flujos['recepcion'] = 1;
        } elseif(isset($_POST['check_digitalizacion'])){
            $flujos['digitalizacion'] = 1;
        } elseif(isset($_POST['check_reportes'])){
            $flujos['reportes'] = 1;
        } elseif(isset($_POST['check_ingreso'])){
            $flujos['ingreso'] = 1;
        } elseif(isset($_POST['check_alistamiento'])){
            $flujos['alistamiento'] = 1;
        } elseif(isset($_POST['check_calidad1'])){
            $flujos['calidad1'] = 1;
        } elseif(isset($_POST['check_consultar'])){
            $flujos['consultar'] = 1;
        } elseif(isset($_POST['check_indexacion'])){
            $flujos['indexacion'] = 1;
        } elseif(isset($_POST['check_calidad2'])){
            $flujos['calidad2'] = 1;
        } elseif(isset($_POST['check_custodia'])){
            $flujos['custodia'] = 1;
        }
        
        
        
        $data["titulos"] = "Usuarios";
        //$this->index();
    }
    
    public function eliminar($id){
        
        $usuarios = new Usuario_Model();        
        $usuarios->eliminar($id);
        $data["titulos"] = "Usuarios";
        $this->index();
    }
    
}


?>
