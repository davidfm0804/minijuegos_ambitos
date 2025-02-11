<?php
class Cambito {
    private $objambito;

    public function __construct() {
        require_once '../modelos/Mambito.php';
        $this->objambito = new Mambito();
    }

    public function cInsertarAmbitos($ambitos) {
        $resultado=$this->objambito->mInsertarAmbitos($ambitos);
        if($resultado==="Csu"){
            return "Ambito o ambitos duplicados";
        }else{
            return "Insercion exitosa";
        }
    }
}
?>