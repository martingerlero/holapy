<?php

/**
 * Description of persona
 *
 * @author Gerlero Martin
 */
class persona {
    private $nroDni;
    private $nombre;
    private $apellido;
    
    function __construct($nroDni, $nombre, $apellido) {
        $this->nroDni = $nroDni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    
    function getNroDni() {
        return $this->nroDni;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }
}
