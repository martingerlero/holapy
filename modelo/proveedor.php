<?php

class proveedor {

    private $cuit;
    private $nombre;
    
    function __construct($cuit, $nombre) {
        $this->cuit = $cuit;
        $this->nombre = $nombre;
    }
    
    function getCuit() {
        return $this->cuit;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setCuit($cuit) {
        $this->cuit = $cuit;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}