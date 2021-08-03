<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Laura
 */
class Login_Model{
    private $db;
    
    public function __construct() {
        $this->db = Conectar::conexion();
    }
    
    public function signIn($email)
  {
    $email = $this->db->real_escape_string($email);
    $sql = "SELECT * FROM Usuarios WHERE correo = '$email' LIMIT 1";
    $resultado = $this->db->query($sql);
    $row = $resultado->fetch_assoc();
    return $row;
  
  }
  
    
    

}
