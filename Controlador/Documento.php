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
class DocumentoController
{
  

  public function __construct()
  {
        require_once 'Modelo/Usuario.php';
        require_once 'Modelo/Permiso.php';
        require_once 'Modelo/OficinaProductora.php';
        require_once 'Modelo/TipoDocumental.php';
        require_once 'Modelo/Documento.php';
        
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
            
            require_once 'Vista/html/homeDocument.php';
             
        } else {
            $data["session"] = null;
            require_once 'Vista/html/login.php';
        }
    }
    public function administrador() {
        header('location: /GestionDocumental/index.php?c=Home&a=session');
    }
    
    public function ingreso() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $tiposDocumentales = new TipoDocumental_Model();  
            
            $oficinasProductoras = new OficinaProductora_Model();
            $usuarioDocumentos= new Documento_Model();
            
            $data["oficinas"] = $oficinasProductoras->get_oficinas_productoras();
            $data["tiposDocumentales"] = $tiposDocumentales->get_tipos_documentales();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            $data["usuarioDocumentos"] = $usuarioDocumentos->get_documents_by_rol($data["usuarioLogin"]["idUsuario"], 'usuario_ingreso');
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
                      
            require_once 'Vista/html/ingreso.php';
        }
    }
    
    
    public function recepcion() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/recepcion.php';
        }
    }
    
    public function alistamiento() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/alistamiento.php';
        }
    }
    
    public function indexacion() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/indexacion.php';
        }
    }
    
    public function digitalizacion() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/digitalizacion.php';
        }
    }
    
    public function calidad1() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
           $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/calidad1.php';
        }
    }
    
    public function calidad2() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/calidad2.php';
        }
    }
    
    public function custodia() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/custodia.php';
        }
    }
    
    public function reportes() {
        
        session_start();
        $mail =  !empty($_SESSION['correo']) ? $_SESSION['correo'] : null;
        if($mail){
            $usuarios = new Usuario_Model();
            $permisos = new Permiso_Model();
            $data["usuarioLogin"] = $usuarios->get_usuario_by_email($mail);
            foreach ($permisos->get_permisos($data["usuarioLogin"]['idUsuario']) as $key => $permiso) {
                $data['permisos'][] = $permiso['nombre'];
            }
            require_once 'Vista/html/reportes.php';
        }
    }
 
}

?>
