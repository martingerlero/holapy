<?php

class barrio {

    private $id;
    private $nombre;
    private $idCiudad;
    
    function __construct($id, $nombre, $idCiudad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->idCiudad = $idCiudad;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdCiudad() {
        return $this->idCiudad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdCiudad($idCiudad) {
        $this->idCiudad = $idCiudad;
    }

    function getNombreCiudad()
    {
        include_once 'ciudad_model.php';
        $ciudad=cm_obtener_ciudad_por_id($this->idCiudad);
        return $ciudad->getNombre();
    }


}