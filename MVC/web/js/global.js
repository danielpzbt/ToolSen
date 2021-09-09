$(document).ready(function () {


    $(document).on("click", "#cambioImagen", function () {

        var ruta = $("#imagen").attr("src");
        $("#cambiarImagen").html("<input type='file' id='fil' name='imagen_f'>");
        $("#cambiarImagen").append("<input type='hidden' name='img_vieja' value='" + ruta + "'>");
    });

    $(document).on("keyup", "#filtro", function () {

        var buscar = $(this).val();
        var url = $(this).attr("data-url");

        $.ajax({

            url: url,
            data: "buscar=" + buscar,
            type: "POST",
            success: function (datos) {
                $("tbody").html(datos);

            }

        });


    });
    //INSERT

    $(document).on("click", "#modal", function () {
        var url = $(this).attr("data-url");


        $.ajax({
            url: url,
            success: function (datos) {
                $("#contenedor").html(datos);
                $("#exampleModal").modal("show");

            }
        });
    });

    //UPDATE

    $(document).on("click", "#modalUpdate", function () {
        var url = $(this).attr("data-url");


        $.ajax({
            url: url,
            success: function (datos) {
                $("#contenedor").html(datos);
                $("#exampleModalUpdate").modal("show");

            }
        });
    });


    $(document).on("click", "#editarModal", function () {

        var url = $(this).attr("data-url");
        var id = $(this).attr("data-id");

        $.ajax({

            url: url,
            data: "id=" + id,
            type: "POST",
            success: function (datos) {

                $("#contenedor").html(datos);
                $("#exampleModal").modal("show");

            }
        });
    });

    //DELETE

    $(document).on("click", "#modalDelete", function () {
        var url = $(this).attr("data-url");


        $.ajax({
            url: url,
            success: function (datos) {
                $("#contenedor").html(datos);
                $("#exampleModalDelete").modal("show");

            }
        });
    });


    $(document).on("click", "#eliminarModal", function () {

        var url = $(this).attr("data-url");
        var id = $(this).attr("data-id");

        $.ajax({

            url: url,
            data: "id=" + id,
            type: "POST",
            success: function (datos) {

                $("#contenedor").html(datos);
                $("#exampleModal").modal("show");

            }
        });
    });
    $(document).on("click","#consultlpModal",function(){

        var url=$(this).attr("data-url");
        var id=$(this).attr("data-id");

        $.ajax({

            url:url,
            data:"id="+id,
            type:"POST",
            success:function(datos){

                $("#contenedor").html(datos);
                $("#exampleModal").modal("show");

            }
        });
    });


    $(document).on("click", "#modalInhabilitar", function () {
        var url = $(this).attr("data-url");


        $.ajax({
            url: url,
            success: function (datos) {
                $("#contenedor").html(datos);
                $("#exampleModalInhabilitar").modal("show");

            }
        });
    });


    $(document).on("click", "#inhabilitarModal", function () {

        var url = $(this).attr("data-url");
        var id = $(this).attr("data-id");

        $.ajax({

            url: url,
            data: "id=" + id,
            type: "POST",
            success: function (datos) {

                $("#contenedor").html(datos);
                $("#exampleModal").modal("show");

            }
        });
    });


    $(document).on("change", "#id_depto", function () {

        var id = $(this).val();
        var url = $(this).attr("data-url");


        $.ajax({
            url: url,
            data: "id_depto=" + id,
            type: "POST",
            success: function (datos) {
                $("#ciu_id").html(datos);
            }
        })
    });

    // MODALES PQRSF //

    $(document).on("click", "#detailModalPqrsf", function () {
        var url = $(this).attr("data-url");
        var id = $(this).attr("data-id");
        
        $.ajax({
            url: url,
            data: "id=" + id,
            type: "POST",
            success: function (datos) {

                $("#contenedor").html(datos);
                $("#exampleModal").modal("show");

            }
        });
    });

    $("#alerta").delay(4000).fadeOut();

    //keyup > soltamos la tecla
    //keypress > presionamos la tecla
    //keydown > cuando baja la tecla


    $("#tabla").DataTable({

        responsive: true,
        language: {
            "decimal": "",
            "emptyTable": "No hay datos",
            "info": "Consultando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Consultando 0 a 0 de 0 registros",
            "infoFiltered": "(Filtro _MAX_ registros en total)",
            "thousands": ".",
            "lengthMenu": "Buscar _MENU_ Registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron resultados",
            "paginate": {

                "next": "Siguiente",
                "previous": "Anterior"

            }

        },
    });


    $(document).on("click", "#eliminar", function () {

        var id = $(this).attr("data-id");
        var url = $(this).attr("data-url");
        var estado = $(this).attr("data-estado");
        var valor = $(this).attr("data-valor");

        $.ajax({
            url: url,
            data: "id=" + id + "&estado=" + estado,
            type: "POST",
            success: function () {
                document.location.reload();

                //$("tbody").html(datos);

            }

        });

    });


    //Alerta por exceso de caracteres.

    // $(document).on("blur","#alertica",function(){

    //     var descripcion=$(this).attr('');
    //     var tamaño=12;

    //     if(descripcion==tamaño){
    //         window.alert("Llegaste al máximo de palabras");
    //     }

    // });


    //Alerta Imagen del foro.
    $(document).on("change", "#fil", function () {



        var preview = document.querySelector('img');
        var file = document.querySelector('input[type=file]').files[0];
        var fil = document.getElementById("fil").value;

        var extensiones_validas = [".jpg"];
        var extension = fil.substring(fil.lastIndexOf(".")).toLowerCase();
        var leer = new FileReader();


        if (!file) {

        } else {

            for (var i = 0; i < extensiones_validas.length; i++) {

                if (extensiones_validas[i] == extension) {
                    var permiso = true;
                    break;
                }
            }

            if (!permiso) {
                window.alert("Tipo de formato incorrecto, revisa que estés subiendo una imagen .jpg");
                preview.src = "";
                document.getElementById("fil").value = "";
            } else {

                leer.readAsDataURL(file);
                leer.onloadend = function () {

                    preview.src = leer.result;

                };
            }
        }
    });


});
