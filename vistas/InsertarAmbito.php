<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de Ámbitos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
        $sw=0;
        foreach($_POST['ambitos'] as $existeAmbito){
            if(empty($existeAmbito)){
                $sw=1;
            }
        }
        if ($sw==0) {
            $nombreAmbitos = $_POST['ambitos'];
            require_once('../controladores/Cambito.php');
            $objambito = new Cambito();
            $resultado = $objambito->cInsertarAmbitos($nombreAmbitos);
            echo $resultado;
        } elseif($sw==1) {
            echo "Campo vacio";
        }else{
            echo "Error en la Inserción";
        }
    ?>
</body>
</html>