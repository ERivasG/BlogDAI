<?php

/**
 * Created by PhpStorm.
 * User: Tebiih
 * Date: 26-05-2016
 * Time: 22:22
 */
class Usuarios
{
    private $idUsuario;
    private $idPerfil;
    private $loginUsuario;
    private $nombres;
    private $apellidos;
    private $clave;

    /**
     * Usuarios constructor.
     * @param $idUsuario
     */
    public function __construct($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * @param mixed $idPerfil
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;
    }

    /**
     * @return mixed
     */
    public function getLoginUsuario()
    {
        return $this->loginUsuario;
    }

    /**
     * @param mixed $loginUsuario
     */
    public function setLoginUsuario($loginUsuario)
    {
        $this->loginUsuario = $loginUsuario;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    function validarUsuario() {
        $sql1 = "SELECT * FROM usuarios WHERE loginUsuario = '".$this->login."'";
        try {
            $miconexion = new Conexion();
            $cn = $miconexion->Conectar();
            $rs = mysqli_query($cn, $sql1);
            if ($rs!=NULL){
                $datos = mysqli_fetch_assoc($rs);
                if($datos['clave']==sha1($this->clave)){
                    $resultado = $datos['idCategoria'];
                }
                else{
                    $resultado = 0;
                }
            }
            else{
                $resultado = -1;
            }
            //Liberamos recursos
            mysqli_free_result($rs);
            mysqli_close($cn);
        } catch (exception $e) {
            try {
                mysqli_free_result($rs);
            } catch (exception $e) {
                echo $e->getMessage();
            }
            try {
                mysqli_close($cn);
            } catch (exception $e) {
                echo $e->getMessage();
            }
        }
        return $resultado;
    }

    function crearUsuario() {
        $sql = "INSERT INTO usuario (idPerfil, loginUsuario, nombres, apellidos, clave) VALUES";
        $sql .= "(2,'".$this->loginUsuario."','".$this->nombres."','".$this->apellidos."',sha1('".$this->clave."'))";

        $conexion = new Conexion();
        $cn = $conexion->Conectar();
        mysqli_query($cn, $sql);
        $conexion->Cerrar();
        return 0;
    }
    
    function datosUsuario(){
        
    }
    

}