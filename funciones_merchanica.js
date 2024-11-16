

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
    function otra_tarea(e) {




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

    function cliente_nuevo() {
        alert($("#cliente_nuevo").val());
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

    /////


}
