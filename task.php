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
$hora = date("G:i");


?>



<div>

    <?php

    if ($_POST['cliente_nuevo'] != "") {

        // $cliente_nuevo = mysqli_query($conexion2, "INSERT INTO `tareas` (`cliente`, `mecanico`, `tarea`, `fecha`, `hora`) VALUES ('$_POST[cliente_nuevo]', 'default', 'default', '$fecha', '$hora')");
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


<h3>Tareas</h3>
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

            $buscar_clientes = mysqli_query($conexion2, "SELECT DISTINCT cliente FROM tareas");

            while ($clientes = mysqli_fetch_array($buscar_clientes)) {


                ?>
                <h2><?php echo $clientes['cliente'] . "<hr>"; ?></h2>
                <?php
                $buscar_tareas = mysqli_query($conexion2, "SELECT * FROM tareas WHERE cliente ='$clientes[cliente]' ");



                while ($tareas = mysqli_fetch_array($buscar_tareas)) {


                    ?>
                    <table>


                        <tr>
                            <td><?php echo $tareas['tarea'] ?></td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td><button style="color:red;width:10px">X</button></td>

                        </tr>
                        <tr>
                            <td><button>Aceptar</button></td>
                        </tr>

                    </table>
                    <?php

                }

            }
        }



        ?>
    </div>

<?php } ?>


<!--añadir tarea-->
<?php if ($_POST['tarea'] != "") { ?>


    <h2>Cliente : <input type="text" placeholder="Cliente" onkeyup="buscar_cliente()" id="cliente_nuevo" value="<?php if ($_POST['cliente_nuevo'] != "") {
        echo $_POST['cliente_nuevo'];
    } ?>" /></h2>






    <p>Tarea</p>
    <div id="resultado_buscar_cliente" style="overflow-y: scroll;"></div>
    <input type="text" style="overflow-wrap" id="intro_tarea" /> <button style="width:20px;"
        onClick="otra_tarea(2)">+</button>

<?php } ?>