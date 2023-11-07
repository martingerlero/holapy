<?php

/**
 * Description of objSucursal
 *
 * @author Gerlero Martin
 */
class producto {
    //Atributos
    private $idProducto;
    private $nombre;
    private $descripcion;
    private $idCategoria;
    private $idProveedor;
    private $idTrazabilidad;
    private $precio;
    
    function __construct($idProducto, $nombre, $descripcion, $idCategoria, $idProveedor, $idTrazabilidad, $precio) {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->idCategoria = $idCategoria;
        $this->idProveedor = $idProveedor;
        $this->idTrazabilidad = $idTrazabilidad;
        $this->precio = $precio;
    }
    
    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getIdTrazabilidad() {
        return $this->idTrazabilidad;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setIdTrazabilidad($idTrazabilidad) {
        $this->idTrazabilidad = $idTrazabilidad;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

        function getCategoriaNombre()
    {
        include_once 'categoria_model.php';
        $categoria= cm_obtener_categoria($this->idCategoria);
        return $categoria->getNombre();
    }
    
    function getProveedorNombre()
    {
        include_once 'proveedor_model.php';
        $proveedor= pm_obtener_proveedor($this->idProveedor);
        return substr($proveedor->getNombre(), 0, 20);
    }


}
