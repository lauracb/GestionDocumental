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
class Permiso_Model{
    private $db;
    private $permisos;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->permisos = array();
    }
    
    public function get_permisos($id){
        $sql = "SELECT * FROM Permisos WHERE idUsuario = '$id'";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->permisos[] = $row;
        }
        return $this->permisos;
    }
    
    public function insertar_permiso($permiso_array, $idUsuario){
        $sql = "DELETE FROM Permisos WHERE idUsuario = '$idUsuario'";
        $resultadoDelete = $this->db->query($sql);
        
        foreach ($permiso_array as $nombre => $permiso) {
            $sql = "INSERT INTO Permisos (idUsuario, nombre) VALUE ('$idUsuario', '$permiso')";
            $resultado = $this->db->query($sql);
        }
        
    }
    
    public function eliminar_permisos($idUsuario){
        $sql = "DELETE FROM Permisos WHERE idUsuario = '$idUsuario'";
        $resultado = $this->db->query($sql);
    }
    

}
