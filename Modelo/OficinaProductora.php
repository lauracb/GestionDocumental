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
class OficinaProductora_Model{
    private $db;
    private $oficinasProductoras;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->oficinasProductoras = array();
    }
    
    public function get_oficinas_productoras(){
        $sql = "SELECT * FROM OficinasProductoras";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->oficinasProductoras[] = $row;
        }
        return $this->oficinasProductoras;
    }
    

}
