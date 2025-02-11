<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Ambitos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <form action="InsertarAmbito.php"method="POST">
        <?php
        if(isset($_POST['numAmbito'])){
            if($_POST['numAmbito']>0 && $_POST['numAmbito']<=10){
                $numAmbito=$_POST['numAmbito'];
                for($i=0;$i<$numAmbito;$i++){
                    echo"<label>Introduce nombre de ambito $i</label>";
                    echo "<input type='text'name='ambitos[]'>";
                    echo"<br>";
                }
                echo '<input type="submit"value="Enviar">';
            }else{
                echo 'Fuera de rango (Introduce solo del 1 al 10)';
                echo '</br><a href="SeleccionaAmbitos.html">Volver</a>';
            }
        }else{
            echo 'No se seleccionaron ambitos';
        }
        ?>
    </form>
</body>
</html>