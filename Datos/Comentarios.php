<?php

/**
 * Created by PhpStorm.
 * User: E Rivas
 * Date: 16-05-2016
 * Time: 14:41
 */
include_once('Conexion.php');

class Comentarios
{
    private $idComentario;
    private $idPublicacion;
    private $idUsuario;
    private $fechaComentario;
    private $textoComentario;

    /**
     * Comentarios constructor.
     * @param $idComentario
     * @param $idPublicacion
     * @param $idUsuario
     * @param $fechaComentario
     * @param $textoComentario
     */
    public function __construct($idComentario, $idPublicacion, $idUsuario, $fechaComentario, $textoComentario)
    {
        $this->idComentario = $idComentario;
        $this->idPublicacion = $idPublicacion;
        $this->idUsuario = $idUsuario;
        $this->fechaComentario = $fechaComentario;
        $this->textoComentario = $textoComentario;
    }

    /**
     * @return mixed
     */
    public function getIdComentario()
    {
        return $this->idComentario;
    }

    /**
     * @param mixed $idComentario
     */
    public function setIdComentario($idComentario)
    {
        $this->idComentario = $idComentario;
    }

    /**
     * @return mixed
     */
    public function getIdPublicacion()
    {
        return $this->idPublicacion;
    }

    /**
     * @param mixed $idPublicacion
     */
    public function setIdPublicacion($idPublicacion)
    {
        $this->idPublicacion = $idPublicacion;
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
    public function getFechaComentario()
    {
        return $this->fechaComentario;
    }

    /**
     * @param mixed $fechaComentario
     */
    public function setFechaComentario($fechaComentario)
    {
        $this->fechaComentario = $fechaComentario;
    }

    /**
     * @return mixed
     */
    public function getTextoComentario()
    {
        return $this->textoComentario;
    }

    /**
     * @param mixed $textoComentario
     */
    public function setTextoComentario($textoComentario)
    {
        $this->textoComentario = $textoComentario;
    }

    function obtenerComentarios(){
        $sql = "SELECT * FROM comentarios ORDER BY idComentario";
        try{
            $miconexion = new Conexion();
            $cn = $miconexion->Conectar();
            $rs = mysqli_query($cn,$sql );
            $registros = array();
            while ($reg = mysqli_fetch_array($rs)){
                array_push($registros,$reg );
            }
            mysqli_free_result($rs);
            mysqli_close($cn);
        }
        catch (exeption $ex){
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
        return $registros;
    }



}

?>