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
class TipoDocumental_Model{
    private $db;
    private $tiposDocumentales;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->tiposDocumentales = array();
    }
    
    public function get_tipos_documentales(){
        $sql = "SELECT * FROM TiposDocumentales";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->tiposDocumentales[] = $row;
        }
        return $this->tiposDocumentales;
    }
    

}
