<?php

class cliente {
    private $nroDni;
    private $email;
    private $telefono;
    private $idBarrio;
    private $calle;
    private $idObraSocial;
    private $nroAfiliado;
    private $fechaAlta;
 
    function __construct($nroDni, $email, $telefono, $idBarrio, $calle, $idObraSocial, $nroAfiliado, $fechaAlta) {
        $this->nroDni = $nroDni;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->idBarrio = $idBarrio;
        $this->calle = $calle;
        $this->idObraSocial = $idObraSocial;
        $this->nroAfiliado = $nroAfiliado;
        $this->fechaAlta = $fechaAlta;
    }
    
    function getNroDni() {
        return $this->nroDni;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getIdBarrio() {
        return $this->idBarrio;
    }

    function getCalle() {
        return $this->calle;
    }

    function getIdObraSocial() {
        return $this->idObraSocial;
    }

    function getNroAfiliado() {
        return $this->nroAfiliado;
    }

    function getFechaAlta() {
        return $this->fechaAlta;
    }

    function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setIdBarrio($idBarrio) {
        $this->idBarrio = $idBarrio;
    }

    function setCalle($calle) {
        $this->calle = $calle;
    }

    function setIdObraSocial($idObraSocial) {
        $this->idObraSocial = $idObraSocial;
    }

    function setNroAfiliado($nroAfiliado) {
        $this->nroAfiliado = $nroAfiliado;
    }

    function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;
    }

    function getNombrePersona()
    {
        include_once 'persona_model.php';
        $responsable= pm_obtener_persona_por_dni($this->nroDni);
        return $responsable->getNombre();
    }
    
    function getApellidoPersona()
    {
        include_once 'persona_model.php';
        $responsable= pm_obtener_persona_por_dni($this->nroDni);
        return $responsable->getApellido();
    }

    function getNombreBarrio()
    {
        include_once 'barrio_model.php';
        $barrio= bm_obtener_barrio_por_id($this->idBarrio);
        return $barrio->getNombre();
    }
    
    function getNombreCiudad()
    {
        include_once 'barrio_model.php';
        $barrio= bm_obtener_barrio_por_id($this->idBarrio);
        return $barrio->getNombreCiudad();
    }

}
?>