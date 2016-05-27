<?php

/**
 * Created by PhpStorm.
 * User: Tebiih
 * Date: 26-05-2016
 * Time: 22:44
 */
class Publicaciones
{
    private $idPublicacion;
    private $idUsuario;
    private $idCategoria;
    private $titulo;
    private $contenido;
    private $fechaCreacion;
    private $fechaModificacion;

    /**
     * Publicaciones constructor.
     * @param $idUsuario
     * @param $idPublicacion
     * @param $idCategoria
     * @param $titulo
     * @param $contenido
     * @param $fechaCreacion
     * @param $fechaModificacion
     */
    public function __construct($idUsuario, $idPublicacion, $idCategoria, $titulo, $contenido, $fechaCreacion, $fechaModificacion)
    {
        $this->idUsuario = $idUsuario;
        $this->idPublicacion = $idPublicacion;
        $this->idCategoria = $idCategoria;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaModificacion = $fechaModificacion;
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
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @param mixed $idCategoria
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * @param mixed $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param mixed $fechaCreacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    /**
     * @return mixed
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * @param mixed $fechaModificacion
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    }
    
    
    
    

}