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
class RegistroController
{
  private $model;

  private $session;

  public function __construct()
  {
    require_once 'Modelo/Usuario.php';
    require_once 'Modelo/Permiso.php';
  }

  public function index() {
               
        require_once 'Vista/html/registro.php';
    }
    
  public function signup()
  {
    
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordReconfirm'];
    $secretaria = $_POST['secretaria'];
    $subsecretaria= $_POST['subsecretaria'];
    $rol = 2; //Default contratista
    
    // Validations
    if($this->verifyEmptyFields($nombres, $apellidos, $cedula, $correo, $secretaria, $subsecretaria, $password, $passwordConfirm)){
        require_once 'Vista/html/registro.php';
      //'campos obligatorios';
    }
    elseif(!$this->password_match($password, $passwordConfirm)){
      require_once 'Vista/html/registro.php';
      //'No hacen match las ocntraseñas';
    }
    else {
        //creating user
        $usuarios = new Usuario_Model();
        $idUser = $usuarios->insertar($nombres, $apellidos, $cedula, $correo, $password, $secretaria, $subsecretaria, $rol);
        session_start();
        $_SESSION['correo'] = $correo;
        header('location: /GestionDocumental/index.php?c=Usuario');
    }
    
  }

  private function verifyEmptyFields($nombres, $apellidos, $cedula, $correo, $secretaria, $subsecretaria, $password, $passwordConfirm)
  {
    return empty($nombres) OR empty($apellidos) OR empty($cedula) OR empty($correo) OR empty($secretaria) OR empty($subsecretaria) OR empty($password) OR empty($passwordConfirm);
  }
  
  private function password_match($password, $passwordConfirm)
  {
    return $password == $passwordConfirm ? true : null;
  }
  

}

?>
