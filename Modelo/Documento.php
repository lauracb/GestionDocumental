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
class Documento_Model{
    private $db;
    private $documentos;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->documentos = array();
    }
    
    public function get_documents(){
        $sql = "SELECT * FROM Documentos";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->documentos[] = $row;
        }
        return $this->documentos;
    }
    
    public function insertar($idEntidadProductora, $idTipoDocumental, $idDocumentoCustodia, $radicado, $resolucion, $nombre, $cedula, $observaciones, $imagenes, $folios, $carpeta, $rutaArchivo, $caja, $usuario_ingreso, $fecha_ingreso){
        $sql = "INSERT INTO Documentos ('idEntidadProductora', 'idTipoDocumental', 'idDocumentoCustodia', 'radicado', 'resolucion', 'nombre', 'cedula', 'observaciones', 'imagenes', 'folios', 'carpeta', 'rutaArchivo', 'caja', 'user_ingreso', 'fecha_ingreso') "
                . "VALUE ('$idEntidadProductora', '$idTipoDocumental', '$idDocumentoCustodia', '$radicado', '$resolucion', '$nombre', '$cedula', '$observaciones', '$imagenes', '$folios', '$carpeta', '$rutaArchivo', '$caja', '$usuario_ingreso', '$fecha_ingreso')";
        $resultado = $this->db->query($sql);
        
        return $this->db->insert_id;
        
    }
   
    public function get_documents_by_rol($idUser, $rol){
        $sql = "SELECT * FROM Documentos WHERE ".$rol." = '$idUser'";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->documentos[] = $row;
        }
        return $this->documentos;
    }
    
    
    

}
