<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of medioDePago
 *
 * @author martin
 */
class medioDePago {
    private $idMedioDePago;
    private $nombre;
    private $descripcion;
    
    function __construct($idMedioDePago, $nombre, $descripcion) {
        $this->idMedioDePago = $idMedioDePago;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }
    
    function getIdMedioDePago() {
        return $this->idMedioDePago;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdMedioDePago($idMedioDePago) {
        $this->idMedioDePago = $idMedioDePago;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



}
