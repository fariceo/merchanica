
<script src="funciones_merchanica.js"></script>
<?php

include("conexion_merchanica.php");

?>

<?php




//fecha-->

ini_set('date.timezone', 'America/Guayaquil');


//echo date("F l h:i");


setlocale(LC_ALL, "es_ES");
strftime("%A %d de %B del %Y");

//$fecha=strftime("%A %d de %B del %Y");
$fecha = date("Y-m-d");
//$fecha='2020-01-13';
$hora = date("G:i");


?>



<?php
if ($_POST['buscar_cliente'] != "") {

    $buscar_cliente = mysqli_query($conexion2, "SELECT * FROM tareas WHERE cliente='$_POST[buscar_cliente]'");

    while ($tareas_cliente = mysqli_fetch_array($buscar_cliente)) {

        ?>

        <table>
            <tr>
                <td style="width:150px"><?php echo "<br>" . $tareas_cliente['tarea']; ?></td>
                <td> <button style="color:red;width:10px"
                        onclick="eliminar_tarea('<?php echo $tareas_cliente[id] ?>')">X</button></td>
            </tr>
        </table>

        <?php
    }
}


if ($_POST['intro_tarea'] != "") {

    $intro_tarea = mysqli_query($conexion2, "INSERT INTO `tareas` (`cliente`, `mecanico`, `tarea`, `fecha`, `hora`) VALUES ('$_POST[buscar_cliente]', 'default', '$_POST[intro_tarea]', '$fecha', '$hora')");
}

?>


<?php if ($_POST['eliminar_tarea'] != "") {
    $eliminar_tarea = mysqli_query($conexion2, "DELETE FROM tareas WHERE id='$_POST[eliminar_tarea]'");
} ?>