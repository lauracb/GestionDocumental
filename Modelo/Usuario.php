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
class Usuario_Model{
    private $db;
    private $usuarios;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->usuarios = array();
    }
    
    public function get_usuarios(){
        $sql = "SELECT * FROM Usuarios";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->usuarios[] = $row;
        }
        return $this->usuarios;
    }
    
    public function insertar($nombres, $apellidos, $cedula, $correo, $password, $secretaria, $subsecretaria, $rol){
        $sql = "INSERT INTO Usuarios (nombres, apellidos, cedula, correo, password, secretaria, subsecretaria, rol) VALUE ('$nombres', '$apellidos', '$cedula', '$correo', '$password', '$secretaria', '$subsecretaria', '$rol')";
        $resultado = $this->db->query($sql);
        
        return $this->db->insert_id;
        
    }
    
    public function modificar($id, $nombres, $apellidos, $cedula, $correo, $password, $secretaria, $subsecretaria, $rol){
        $sql = "UPDATE Usuarios SET nombres='$nombres', apellidos='$apellidos', cedula='$cedula', correo = '$correo', password = '$password', secretaria = '$secretaria', subsecretaria = '$subsecretaria', rol = '$rol' WHERE idUsuario = '$id'";
        $resultado = $this->db->query($sql);
    }
    
    public function eliminar($id){
        $sql = "DELETE FROM Usuarios WHERE idUsuario = '$id'";
        $resultado = $this->db->query($sql);
    }
    
    public function get_usuario($id){
        $sql = "SELECT * FROM Usuarios WHERE idUsuario='$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
    
    public function get_usuario_by_email($email){
        $sql = "SELECT * FROM Usuarios WHERE correo='$email' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
    
    
//    private $flujos;
//    private $nombre;
//    private $apellido;
//    private $password;
//    private $correo;
//    private $secretaria;
//    private $subsecretaria;
//    
//    function __construct($flujos, $nombre, $apellido, $password, $correo, $secretaria, $subsecretaria) {
//        $this->flujos = $flujos;
//        $this->nombre = $nombre;
//        $this->apellido = $apellido;
//        $this->password = $password;
//        $this->correo = $correo;
//        $this->secretaria = $secretaria;
//        $this->subsecretaria = $subsecretaria;
//    }
//    
//    function obtenerFlujos(){
//        return $this->flujos;
//    }
//    
//    function obtenerNombre(){
//        return $this->nombre;
//    }
//    
//    function obtenerApellido(){
//        return $this->apellido;
//    }
//    
//    function obtenerPassword(){
//        return $this->password;
//    }
//    
//    function obtenerCorreo(){
//        return $this->correo;
//    }
//    
//    function obtenerSecretaria(){
//        return $this->secretaria;
//    }
//    
//    function obtenerSubsecretaria(){
//        return $this->subsecretaria;
//    }

}
