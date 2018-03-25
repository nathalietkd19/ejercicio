<?php
/**
 * Created by PhpStorm.
 * User: Laboratorio2
 * Date: 25/03/2018
 * Time: 14:57
 */


require_once '../driver.php';

class ClienteModelo {

    private $enlace;

    function _construct()
    {
        $this->enlace= new DrMysqli();

    }

    function eliminar($id){

        $consulta="DELETE FROM clientes WHERE Id=" .$id;

        return $this-> enlace-> query($consulta);

    }

    function agregar($nombre, $edad, $sexo)
    {
        $consulta=sprintf("INSERT INTO clientes VALUES(DEFAULT'%s', '%i','%b', DEFAULT)", $nombre, $edad, $sexo);
        return $this->enlace->query($consulta);


    }



    function desactivar($id){
        $consulta="UPDATE clientes set Activo = 0  WHERE Id=".$id;

        return $this->enlace->query($consulta);

    }

    function  obtener(){

        $consulta="SELECT * FROM clientes WHERE Activo=1";
        return $this->enlace->multiples_datos($consulta);
    }

}