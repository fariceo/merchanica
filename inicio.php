<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="funciones_merchanica.js"></script>
    <script>


        $(document).ready(function () {

        }


    </script>

    <title>Document</title>
</head>

<body>
    <?php //include("conexion_merchanica.php"); ?>



    <!--Logo-->

    <div style="background: #619eff;width:100%;height:25px;text-align:center">

        <h3>MERCHANICA</h3>

    </div>

    <!--botonera-->
    <div style="text-align:center">

        <a><img src="../../imagenes/carrito.png" style="width:25px;height:25px"></a>
        <a onClick="tareas()"><img src="../../imagenes/tareas.png" style="width:25px;height:25px"></a>
        <a onClick="cobros()"><img src="../../imagenes/pago.png" style="width:25px;height:25px"></a>
        <a><img src="../../imagenes/historial.png" style="width:25px;height:25px"></a>
        <a><img src="../../imagenes/finanzas.png" style="width:25px;height:25px"></a>


    </div>

    <div style="width:100%;height:1px;background:silver;"></div>

    <!--contenedor-->
    <div id="contenedor"></div>


    <footer></footer>
</body>

</html>