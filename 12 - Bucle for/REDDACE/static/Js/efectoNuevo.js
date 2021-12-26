
$(document).ready(function (){
    var cedulaNueva = document.getElementById('cedulaNueva');
    var cedulaNueva_conf=document.getElementById('cedulaNueva_conf').value;  
    var datos=$('#Nuevaparte0').serializeArray();    //por array[?]
    var cofi;
            $("#cedulaNueva").keyup(function(){
                if(cedulaNueva.length > 7) {
                    // $.ajax({   
                    //     type:"POST",
                    //     url:"../NuevosDatos/buscandoCedula.php", 
                    //     data:'Cedula='+cedulaNueva.value,
                    //     success:function(res1){
                    //           $('#cedulaNueva_conf').value(res1);  
                    //     }
                    // });
                    console.log(cedulaNueva.length)
                }
            });
        $("#procesar0N").focus(function(){
            for (let index = 0; index == 6 ; index++) {
                    if(dato[i] == null || datos[i] == ''){
                        $('#R0').html("<p class='fracaso_login'>Los campo no pueden estar vasio</p>");
                        cofi = 1;
                    }
                    else{
                        cofi = 0;
                    }
            }
            if(cofi == 0){
                    $("#procesar0N").css('cursor' ,'no-drop', 'disabled','none');
            }
        });
  // efecto buscar
  $("#procesar0N").click(function (){
     // peticion ajax
     alert('que pasa')
    //  var datos=$('#buscarEST').serializeArray();
    //  $.ajax({   
    //             type:"POST",
    //             url:"../busqueda/ANLxEST.php", 
    //             data:datos,
    //             success:function(res1){
    //                 if (res1 != 1 /*Encontrada*/) {
    //                     location.href=res1;   
    //                 }
    //                 else{
    //                   $('#mensajeQ').html(res1);  
    //                 };
    //             }
    //         }); 
  });
});


