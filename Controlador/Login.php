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
class LoginController
{
  private $model;

  private $session;

  public function __construct()
  {
    require_once 'Modelo/Login.php';
    //$this->model = new LoginModel();
    //$this->session = new Session();
  }

  public function index() {
               
        require_once 'Vista/html/login.php';
    }
    
  public function signin()
  {
    
    $email = isset($_POST['correo']) ? $_POST['correo']: null;
    $password = isset($_POST['password']) ? $_POST['password']: null;
    
    $login = new Login_Model();
    $result = $login->signIn($email);
    
    if($this->verify($email, $password)){
        require_once 'Vista/html/login.php';
      //'El email y password son obligatorios';
    }
    elseif(!$result['correo']){
        require_once 'Vista/html/login.php';
      //"El email {$email} no fue encontrado";
        
    }
    //elseif(!password_verify($password, $result['password'])){
    elseif(!$this->password_verification($password, $result['password'])){
      require_once 'Vista/html/login.php';
      //'La contraseña es incorrecta';
    
    } else {
        session_start();
        $_SESSION['correo'] = $result['correo'];
        header('location: /GestionDocumental/index.php?c=Usuario');
    }
  }

  private function verify($email, $password)
  {
    return empty($email) OR empty($password);
  }
  
  private function password_verification($pass, $password)
  {
    return $pass == $password ? true : null;
  }
  
  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    header('location: /GestionDocumental/index.php?c=Login&a=signin');
  }
  

}

?>
