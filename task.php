<script src="funciones_merchanica.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>


    $(document).ready(function () {

    }


</script>
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
echo $hora = date("G:i");


?>



<div>

    <?php

    if ($_POST['cliente_nuevo'] != "") {
        echo $_POST["cliente_nuevo"];
        $cliente_nuevo = mysqli_query($conexion2, "INSERT INTO `tareas` (`cliente`, `mecanico`, `tarea`, `fecha`, `hora`) VALUES ('$_POST[cliente_nuevo]', 'default', 'default', '$fecha', '$hora')");
        
                                                              //  "INSERT INTO `tareas` (`cliente`, `mecanico`, `tarea`, `fecha`, `hora`) VALUES ('test', 'default', 'default', '2023-02-07', '19:32:00')";
    }


    ?>
</div>

<?php
/*
if ($_POST['intro_tarea'] != "") {
    $intro_tarea = mysqli_query($conexion, "INSERT INTO `tareas` (`cliente`,`tarea`,`mecanico`) VALUES ('$_POST[cliente]','$_POST[nueva_tarea]','default')");
}
*/
?>

<!---->
<?php if ($_POST['tarea'] == "") { ?>

    <div style="background:#e3e5e7">
        <button style="width:20px;float:right;margin-right:25%;text-align:center" onClick="otra_tarea()">+</button><a
            style="float:right;sticky;color:silver">Añadir tarea</a>
    </div>
    <br>
    <div style="overflow-y: scroll;height: 375px">
        <?php
        if ($_POST['a'] != '') {
            $buscar_tareas = mysqli_query($conexion, "SELECT * FROM tareas ");



            while ($tareas = mysqli_fetch_array($buscar_tareas)) {

                echo "<br>" . $tareas['tareas'] . "<hr>";

            }

        }



        ?>
    </div>

<?php } ?>


<!--añadir tarea-->
<?php if ($_POST['tarea'] != "") { ?>

    <h2>Cliente : <input type="text" placeholder="Cliente" onblur="cliente_nuevo()" id="cliente_nuevo" /></h2>

    <p>Tarea</p><input type="text" style="overflow-wrap" /> <button style="width:20px;" onClick="otra_tarea(2)">+</button>

<?php } ?>