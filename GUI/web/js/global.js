$(document).ready(function(){
  
    $(document).on("keyup","#filtro",function(){

        var buscar=$(this).val();
        var url="../../controller/departamento/filtro.php";

        $.ajax({
            url:url,
            data:"depto="+buscar,
            type:"POST",
            success:function(datos){
                $("tbody").html(datos);
            }
        });

    });
    $(document).on("keyup","#buscar",function(){
        var buscar=$(this).val();
        var url="../../controller/ciudad/filtro.php";

        $.ajax({
            url:url,
            data:"buscar="+buscar,
            type:"POST",
            success:function(datos){
                $("tbody").html(datos);
            }
        });
    });


    $(document).on("click","#mostrar",function(){

       
        let mostrar = document.querySelector("#mostrar");
        let formforo = document.querySelector(".formforo");

        mostrar.onclick = function() {
            formforo.classList.toggle("active");
        }
      
    });



});