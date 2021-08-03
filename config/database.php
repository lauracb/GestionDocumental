<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Laura
 */
class Conectar {
//    private $mySQLI;
//    private $sql;
//    private $result;
//    private $filasAfectadas;
//    private $id;
    
//    private $host = "localhost";
//    private $user = "root";
//    private $password = "root";
//    private $db = "gestion_documental";
//    private $conect;
//    
//    public function __construct(){
//        $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
//        try {
//            $this->conect = new PDO($connectionString, $this->user, $this->password);
//            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo "Conexión exitosa";
//        } catch (Exception $exc) {
//            $this->conect = 'Error de conexión';
//            echo "ERROR: ". $exc->getMessage();
//        }
//    }

    
    public static function conexion(){
        $conexion = new mysqli('localhost', 'root', 'root', 'gestion_documental');
        if(mysqli_connect_error()){
            return 0;
        } else {
            return $conexion;
        }
    }
    
    public function cerrar(){
        $this->mySQLI->close();
    }
    
    public function consulta($sql){
        $this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);
    }
    
    public function obtenerResult(){
        return $this->result;
    }
    
    public function obtenerFilasAfectadas(){
        return $this->filasAfectadas;
    }
    
    public function obtenerIds(){
        return $this->id;
    }
}

//    $conexion = new Conexion();
//    $conexion->abrir();
?>