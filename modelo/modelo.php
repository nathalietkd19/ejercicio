<?php
/**
 * Created by PhpStorm.
 * User: Laboratorio2
 * Date: 25/03/2018
 * Time: 14:59
 */

require_once '../driver.php';

class ClienteModelo{
    private $enlace;

    function __construct()
    {
        $this->enlace = new DMysqli();
    }

    function saludar(){
        return 'ESTE MSJ VIENE DEL MODELO';
    }

    function eliminarCliente($id){
        $consulta = "DELETE FROM cliente WHERE id = " . $id;
        return $this->enlace->query($consulta);
    }

    function agregarCliente($nombre, $apellido, $edad){
        $consulta = sprintf("INSERT INTO cliente VALUES (DEFAULT,'%s','%s',%d,DEFAULT)", $nombre, $apellido, $edad);
        return $this->enlace->query($consulta);
    }

    function desactivarCliente($id){
        $consulta = "UPDATE cliente set activo = 0 WHERE id = " . $id;
        return $this->enlace->query($consulta);
    }

    function obtenerClientes(){
        $consulta = "SELECT * FROM cliente WHERE activo = 1";
        return $this->enlace->multiples_datos($consulta);
    }
}