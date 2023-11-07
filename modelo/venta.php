<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of venta
 *
 * @author martin
 */
class venta {
    private $fecha;
    private $idSucursal;
    private $nroDniCliente;
    private $idFactura;
    private $medioDePago;
    
    function __construct($fecha, $idSucursal, $nroDniCliente, $idFactura, $medioDePago) {
        $this->fecha = $fecha;
        $this->idSucursal = $idSucursal;
        $this->nroDniCliente = $nroDniCliente;
        $this->idFactura = $idFactura;
        $this->medioDePago = $medioDePago;
    }
    
    function getFecha() {
        return $this->fecha;
    }

    function getIdSucursal() {
        return $this->idSucursal;
    }

    function getNroDniCliente() {
        return $this->nroDniCliente;
    }

    function getIdFactura() {
        return $this->idFactura;
    }

    function getMedioDePago() {
        return $this->medioDePago;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setIdSucursal($idSucursal) {
        $this->idSucursal = $idSucursal;
    }

    function setNroDniCliente($nroDniCliente) {
        $this->nroDniCliente = $nroDniCliente;
    }

    function setIdFactura($idFactura) {
        $this->idFactura = $idFactura;
    }

    function setMedioDePago($medioDePago) {
        $this->medioDePago = $medioDePago;
    }

    function getNombreSucursal()
    {
        include_once 'modelo/sucursal_model.php';
        $suc=sm_obtener_sucursal($this->idSucursal);
        $sucursal_nombre = $suc[0]->getNombre();
        return $sucursal_nombre;
    }
    
    function getNombreApellidoCliente()
    {
        include_once 'persona_model.php';
        $responsable= pm_obtener_persona_por_dni($this->nroDniCliente);
        return $responsable->getNombre()." ".$responsable->getApellido();
    }
    
    function getMontoVenta()
    {
        include_once 'venta_model.php';
        $monto = vm_obtener_monto_venta($this->idFactura);
        return $monto;
    }

}
