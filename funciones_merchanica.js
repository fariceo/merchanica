

function tareas() {
    //alert()
    $.ajax({

        type: 'POST',
        //url:'menu_clientes.php',
        url: 'task.php',
        data: { a: 1 },
        success: function (result) {
            $("#contenedor").html(result);
            //$("#menu_carta").css("display","none");
        }

    });
}



function cobros() {

    $.ajax({

        type: 'POST',
        //url:'menu_clientes.php',
        url: 'cobros_merchanica.php',
        data: { a: 1 },
        success: function (result) {
            $("#contenedor").html(result);
            //$("#menu_carta").css("display","none");
        }

    });
}


///funciones task.php
{


    function cliente_nuevo() {
        //alert($("#cliente_nuevo").val());
        $.ajax({

            type: 'POST',
            //url:'menu_clientes.php',
            url: 'task.php',
            data: { cliente_nuevo: $("#cliente_nuevo").val() },
            success: function (result) {
                $("#contenedor").html(result);
                //$("#menu_carta").css("display","none");
            }

        });


    }

    function buscar_cliente() {

        // alert($("#cliente_nuevo").val());
        $.ajax({

            type: 'POST',
            //url:'menu_clientes.php',
            url: 'procesar_merchanica.php',
            data: { buscar_cliente: $("#cliente_nuevo").val(), cliente_nuevo: $("#cliente_nuevo").val() },
            success: function (result) {
                $("#resultado_buscar_cliente").html(result);
                //$("#menu_carta").css("display","none");
            }

        });

        $.ajax({

            type: 'POST',
            //url:'menu_clientes.php',
            url: 'task.php',
            data: { cliente_nuevo: $("#cliente_nuevo").val() },
            success: function (result) {
                // $("#resultado_buscar_cliente").html(result);
                //$("#menu_carta").css("display","none");
            }

        });
    }




    function otra_tarea(e) {

        //alert($("#busscar_cliente").val() + " " + $("#intro_tarea").val());
        if (e == 2) {

            $.ajax({

                type: 'POST',
                //url:'menu_clientes.php',
                url: 'procesar_merchanica.php',
                data: { buscar_cliente: $("#cliente_nuevo").val(), intro_tarea: $("#intro_tarea").val() },
                success: function (result) {
                    // $("#contenedor").html(result);
                    //$("#menu_carta").css("display","none");
                }

            });



            $.ajax({

                type: 'POST',
                //url:'menu_clientes.php',
                url: 'task.php',
                data: { tarea: 1, cliente_nuevo: $("#cliente_nuevo").val() },
                success: function (result) {
                    $("#contenedor").html(result);


                    //$("#menu_carta").css("display","none");
                }

            });

            buscar_cliente();

        } else {

            $.ajax({

                type: 'POST',
                //url:'menu_clientes.php',
                url: 'task.php',
                data: { tarea: 1 },
                success: function (result) {
                    $("#contenedor").html(result);


                    //$("#menu_carta").css("display","none");
                }

            });

        }

    }

    /////funciones task


}

{
    /**/
    function eliminar_tarea(e) {


        $.ajax({

            type: 'POST',
            //url:'menu_clientes.php',
            url: 'procesar_merchanica.php',
            data: { eliminar_tarea: e },
            success: function (result) {
               // $("#contenedor").html(result);


                //$("#menu_carta").css("display","none");
            }

        });
        $.ajax({

            type: 'POST',
            //url:'menu_clientes.php',
            url: 'task.php',
            data: { tarea: 1 },
            success: function (result) {
               // $("#contenedor").html(result);


                //$("#menu_carta").css("display","none");
            }

        });

        buscar_cliente();


    }



    /////
}