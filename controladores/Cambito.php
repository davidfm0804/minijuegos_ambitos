<?php
class Cambito {
    private $objambito;

    public function __construct() {
        require_once '../modelos/Mambito.php';
        $this->objambito = new Mambito();
    }

    public function cInsertarAmbitos($ambitos) {
        $resultado=$this->objambito->mInsertarAmbitos($ambitos);
        if($resultado==0){
            return "Insercion Exitosa";
        }else{
            $cadena=implode(", ", $resultado);
            return "Estos ambitos ya existian ".$cadena." los demas fueron insertados.";
        }
    }
}
?>