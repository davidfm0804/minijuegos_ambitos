<?php
class Mambito {
    private $conexion;

    public function __construct() {
        require_once '../config/configdb.php';
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $this->conexion->set_charset("utf8");

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
        // Activar modo de excepciones
        $this->conexion->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
    }

    public function mInsertarAmbitos($ambitos) {
        $sql = $this->conexion->prepare("INSERT INTO ambito(nombre) VALUES (?)");
        $sql->bind_param("s", $nombre);
        $sw=0;
        for ($i = 0; $i < count($ambitos); $i++) {
            $nombre = $ambitos[$i];
            try {
                $sql->execute();
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    $error[]=$nombre;
                    $sw=1;
                }
            }
        }
        if($sw==1){
            return $error;
        }else{
            return $sw;
        }
    }
}
?>