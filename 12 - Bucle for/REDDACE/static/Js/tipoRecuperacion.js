$(document).ready(function () {
    var event = document.getElementById("PoP");
    // alert(event.value);       
        $("#PoP").change(function () {
            // para todas eliminar12 
            if(event.value==""){
                // 1 Opciones
                $("#intenparte1").addClass("eliminar12");
                $("#intenparte2").addClass("eliminar12");
                $("#intenparte1").removeClass("CLAVparte2");
                $("#intenparte2").removeClass("CLAVparte3");
                // 2 Intencivo
                $("#inteparte1").addClass("eliminar12");
                $("#inteparte2").addClass("eliminar12");
                $("#inteparte1").removeClass("CLAVparte2");
                $("#inteparte2").removeClass("CLAVparte3");
                // 3 Repitencia
                $("#repiparte1").addClass("eliminar12");
                $("#repiparte2").addClass("eliminar12");
                $("#repiparte1").removeClass("CLAVparte2");
                $("#repiparte2").removeClass("CLAVparte3");
                // 4 Inscripción
                $("#inscriparte1").addClass("eliminar12");
                $("#inscriparte2").addClass("eliminar12");
                $("#inscriparte1").removeClass("CLAVparte2");
                $("#inscriparte2").removeClass("CLAVparte3");
                                // otro efecto
                                $("#inp4parte2").addClass("eliminar12");
                                $("#inp4parte2").addClass("eliminar12");
                                $("#inp4parte2").removeClass("inp4");
                                $("#inp4parte2").removeClass("inp4");
                                // 
                                $("#inp4parte1").addClass("inp4");
                                $("#inp4parte1").addClass("inp4");
                                $("#inp4parte1").removeClass("eliminar12");
                                $("#inp4parte1").removeClass("eliminar12");

            };
            // solo para el intencivo
            if(event.value=="Intencivo"){
                $("#intenparte1").addClass("CLAVparte2");
                $("#intenparte2").addClass("CLAVparte3");
                $("#intenparte1").removeClass("eliminar12");
                $("#intenparte2").removeClass("eliminar12");
                             // ocultar
                             $("#inscriparte1").addClass("eliminar12");
                             $("#inscriparte2").addClass("eliminar12");
                             $("#inscriparte1").removeClass("CLAVparte2");
                             $("#inscriparte2").removeClass("CLAVparte3");
                            //  
                             $("#repiparte1").addClass("eliminar12");
                             $("#repiparte2").addClass("eliminar12");
                             $("#repiparte1").removeClass("CLAVparte2");
                             $("#repiparte2").removeClass("CLAVparte3");
                                // otro efecto
                                $("#inp4parte2").addClass("eliminar12");
                                $("#inp4parte2").addClass("eliminar12");
                                $("#inp4parte2").removeClass("inp4");
                                $("#inp4parte2").removeClass("inp4");
                                // 
                                $("#inp4parte1").addClass("inp4");
                                $("#inp4parte1").addClass("inp4");
                                $("#inp4parte1").removeClass("eliminar12");
                                $("#inp4parte1").removeClass("eliminar12");
                             
            };
            // solo para el inscripcion
            if(event.value=="Inscripcion"){
                $("#inscriparte1").addClass("CLAVparte2");
                $("#inscriparte2").addClass("CLAVparte3");
                $("#inscriparte1").removeClass("eliminar12");
                $("#inscriparte2").removeClass("eliminar12");
                            // ocultar
                            $("#inteparte1").addClass("eliminar12");
                            $("#inteparte2").addClass("eliminar12");
                            $("#inteparte1").removeClass("CLAVparte2");
                            $("#inteparte2").removeClass("CLAVparte3");
                            // 
                            $("#repiparte1").addClass("eliminar12");
                            $("#repiparte2").addClass("eliminar12");
                            $("#repiparte1").removeClass("CLAVparte2");
                            $("#repiparte2").removeClass("CLAVparte3");
                                // otro efecto
                                $("#inp4parte2").addClass("eliminar12");
                                $("#inp4parte2").addClass("eliminar12");
                                $("#inp4parte2").removeClass("inp4");
                                $("#inp4parte2").removeClass("inp4");
                                // 
                                $("#inp4parte1").addClass("inp4");
                                $("#inp4parte1").addClass("inp4");
                                $("#inp4parte1").removeClass("eliminar12");
                                $("#inp4parte1").removeClass("eliminar12");
            };
            // solo para el Repitencia
            if(event.value=="Repitencia"){
                $("#repiparte1").addClass("CLAVparte2");
                $("#repiparte2").addClass("CLAVparte3");
                $("#repiparte1").removeClass("eliminar12");
                $("#repiparte2").removeClass("eliminar12");
                            // ocultar
                            $("#inteparte1").addClass("eliminar12");
                            $("#inteparte2").addClass("eliminar12");
                            $("#inteparte1").removeClass("CLAVparte2");
                            $("#inteparte2").removeClass("CLAVparte3");
                            // 
                            $("#inscriparte1").addClass("eliminar12");
                            $("#inscriparte2").addClass("eliminar12");
                            $("#inscriparte1").removeClass("CLAVparte2");
                            $("#inscriparte2").removeClass("CLAVparte3");
                                // otro efecto
                                $("#inp4parte1").addClass("eliminar12");
                                $("#inp4parte1").addClass("eliminar12");
                                $("#inp4parte1").removeClass("inp4");
                                $("#inp4parte1").removeClass("inp4");
                                // 
                                $("#inp4parte2").addClass("inp4");
                                $("#inp4parte2").addClass("inp4");
                                $("#inp4parte2").removeClass("eliminar12");
                                $("#inp4parte2").removeClass("eliminar12");
            };

    });
});

$(document).ready(function () {
    var event2 = document.getElementById("inp4Metodo");
    //   alert2 (event2.value); 
        $("#inp4Metodo").change(function () {
            if(event2.value=="Crear"){
                // 1
                $("#crearRepitencia").addClass("conte");
                $("#crearRepitencia").removeClass("eliminar12");
                // 2
                $("#addRepitencia").addClass("eliminar12");
                $("#addRepitencia").removeClass("conte1");
                    // otro efecto
                        // // 1
                        // $("#parr1").removeClass("eliminar12");
                        // // 2
                        // $("#parr2").addClass("eliminar12");
            
            };
            if(event2.value=="Agregar"){
                // 1
                $("#addRepitencia").addClass("conte1");
                $("#addRepitencia").removeClass("eliminar12");
                // 2
                $("#crearRepitencia").addClass("eliminar12");
                $("#crearRepitencia").removeClass("conte");
                    // otro efecto
                        // // 1
                        // $("#parr1").addClass("eliminar12");
                        // // 2
                        // $("#parr2").removeClass("eliminar12");
            };
      });
    
});
