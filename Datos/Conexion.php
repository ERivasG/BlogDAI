<?php

/**
 * Created by PhpStorm.
 * User: E padawan Rivas
 * Date: 16-05-2016
 * Time: 14:33
 */
class Conexion
{
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "evaluacion2";
    public $Conexion_ID;
    public $Error;

    function Conectar(){
        $this->Conexion_ID = mysqli_connect($this->dbserver,$this->dbuser,$this->dbserver,$this->dbname);
        if(!$this->Conexion_ID){
            $this->Error = "Ha fallado conexion";
            return 0;
        }
        return $this->Conexion_ID;
    }

    function Cerra(){
        mysqli_close($this->Conexion_ID);
        return 0;
    }


}

?>