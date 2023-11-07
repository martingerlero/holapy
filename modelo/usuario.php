<?php
/**
 * Description of usuario
 *
 * @author Gerlero Martin
 */
class usuario {
    //Atributos
    private $nroDni;
    private $usuario;
    
    function __construct($nroDni, $usuario) {
        $this->nroDni = $nroDni;
        $this->usuario = $usuario;
    }

    function getNroDni() {
        return $this->nroDni;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function getUsuarioNombreApellido()
    {
        include_once 'persona_model.php';
        $persona= pm_obtener_persona_por_dni($this->nroDni);
        return $persona->getNombre()." ".$persona->getApellido();
    }

}

?>