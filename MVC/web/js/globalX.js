$(document).ready(function(){
  
    $(document).on("keyup","#filtro",function(){

        var buscar=$(this).val();

        $.ajax({

            url:"../../controller/departamento/filtro.php",
            data:"buscar="+buscar,
            type:"GET",
            success:function(datos){
                $("tbody").html(datos);

            }

        });

    });

});
