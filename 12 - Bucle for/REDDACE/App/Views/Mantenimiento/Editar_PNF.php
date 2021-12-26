<link rel="stylesheet" href="../../../static/Css/ePNF.css"> 

<div id="ePNF">
        <div class="titwl" >
            <h3>Editar PNF</h3>
        </div>

                <form id="e_PNF">
                    
                    <div class="OPC1parte0">
                        <center>  <b>Carrera *</b></center>
                        
                            <div>
                            <select class="robo Pintar3" name="Carrera"  required id="Carrera1">
                                    <option value="">Opciones</option>
                                </select> 
                            </div>
                    </div>

                    <div class="OPC1parte1">
                        <center>  <b>Duracion *</b></center>
                        
                            <div>
                            <input type="text"class="robo" name="Duracion" id="Duracion1" required >
                            </div>
                    </div>

                    <div class="OPC1parte2">
                        <center>  <b>Titulo *</b> </center>
                           
                            <div>
                                <select class="robo" name="Titulo" id="Titulo1" required>
                                    <option value="">Opciones</option>
                                    <option value="LIS">LIS</option>
                                    <option value="TSU">TSU</option>
                                    <option value="ING">ING</option>
                                    <option value="TSU e ING">TSU e ING</option>
                                </select>
                            </div>
                    </div>
                    <div class="OPC1parte3">
                        <center>  <b>Estado *</b> </center>
                            
                            <div>
                                <select class="robo" name="Estado" id="Estado1" required>
                                    <option value="">Opciones</option>
                                    <option value="Eliminado">Eliminado</option>
                                    <option value="Activo">Activo</option>
                                </select>
                            </div>
                    </div>
                  
                  

                    <div class="OPC1parte6 aceptar" >
                            <button  type="button" class="boton mat-raised-button efecto-btn-1" id="editar_PNF_editar">
                                <span>Guardar</span>
                            </button>
                    </div>

                </form>

</div> 

<script>
 $(document).ready(function(){   
    $("#editar_PNF_editar").click(function(){  
        var r0 = document.getElementById('como').value;
        var r1 = document.getElementById('Carrera1').value;
        var r2 = document.getElementById('Duracion1').value;
        var r3 = document.getElementById('Titulo1').value;
        var r4 = document.getElementById('Estado1').value;
        var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4;
        var url  = '../Mantenimiento/Modificar_PNF.php';
        // Mostar 
        var Mostar = new Solicitud(data,url);  
        var respuesta = Mostar.Mostar();
        return false;
         
    });
});
</script> 

<script>
 $(document).ready(function(){   
            var url  = '../Combo-box/D-box-PNF2.php';
                // Mostar
                var data=1;
                var Pintar3 = new Solicitud(data,url);   
                var respuesta = Pintar3.Pintar3();    
                 return false;       
 });
</script>
