<?php
class categoria {

    //Atributos
    private $idCategoria;
    private $nombre;

    function __construct($idCategoria, $nombre) {
        $this->idCategoria = $idCategoria;
        $this->nombre = $nombre;
    }
    
    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
?>