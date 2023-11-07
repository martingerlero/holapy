<?php

/**
 * Description of objSucursal
 *
 * @author Gerlero Martin
 */
class sucursal {
    //Atributos
    private $idSucursal;
    private $nombre;
    private $direccion;
    private $dniUsuarioResponsable;
    
    function __construct($idSucursal, $nombre, $direccion, $dniUsuarioResponsable) {
        $this->idSucursal = $idSucursal;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->dniUsuarioResponsable = $dniUsuarioResponsable;
    }

        function getIdSucursal() {
        return $this->idSucursal;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getDniUsuarioResponsable() {
        return $this->dniUsuarioResponsable;
    }

    function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setDniUsuarioResponsable($dniUsuarioResponsable) {
        $this->dniUsuarioResponsable = $dniUsuarioResponsable;
    }
    
    function getResponsableNombreApellido()
    {
        include_once 'persona_model.php';
        $responsable= pm_obtener_persona_por_dni($this->dniUsuarioResponsable);
        return $responsable->getNombre()." ".$responsable->getApellido();
    }
}
