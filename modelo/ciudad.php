<?php
class ciudad {

    private $idCiudad;
    private $nombre;
    
    function __construct($idCiudad, $nombre) {
        $this->idCiudad = $idCiudad;
        $this->nombre = $nombre;
    }
    
    function getIdCiudad() {
        return $this->idCiudad;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdCiudad($idCiudad) {
        $this->idCiudad = $idCiudad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    


}
?>