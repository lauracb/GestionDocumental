<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controlador
 *
 * @author Laura
 */
    
        
class Controlador {
    public function verPagina($ruta){
        require_once $ruta;
    }
    
    public function agregarUsuario($flujos, $nombre, $apellido, $correo, $secretaria, $subsecretaria, $password ){
        echo 'controlador';
        $usuario = new Usuario($flujos, $nombre, $apellido, $correo, $secretaria, $subsecretaria, $password);
        
        $gestorUsuario = new GestorUsuario();
        $gestorUsuario->agregarUsuario($usuario);
        //$result = $gestorUsuario->consultarUsuarioPorId($id);
        //require_once 'Vista/html/frm_table_ver_usuario.html';
               
    }
}


?>


