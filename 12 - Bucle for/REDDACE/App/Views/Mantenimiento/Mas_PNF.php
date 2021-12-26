
<link rel="stylesheet" href="../../../static/Css/mas.css"> 

<div id="mPNF">
        <div class="titwl" >
            <h3>Nuevo PNF</h3>
        </div>
        <form id="Mas_PNF" >
              <div class="OPC1parte0">
                  <center>  <b>Carrera *</b></center>
                      <div>
                      <input type="text"class="robo" name="Carrera12" id="Carrera12" required >
                      </div>
              </div>

              <div class="OPC1parte1">
                  <center>  <b>Duracion *</b></center>
                      <div>
                      <input type="text"class="robo" name="Duracion12" id="Duracion12" required >
                      </div>
              </div>
                    
              <div class="OPC1parte2">
                   <center>  <b>Titulo *</b> </center>
                      <div>
                         <select class="robo" name="Titulo12" id="Titulo12" required>
                             <option value="">Opciones</option>
                             <option value="LIS">LIS</option>
                             <option value="TSU">TSU</option>
                             <option value="ING">ING</option>
                             <option value="TSU e ING">TSU e ING</option>
                         </select>
                      </div>
              </div>


              <div class="OPC1parte6 aceptar" >
                     <button  type="button" class="boton mat-raised-button efecto-btn-1 rq13" id="masPNFmass">
                        <span>Guardar</span>
                     </button>
              </div>
      </form>
</div>  
<div id="comunicasion">

</div> 
<script>
 $(document).ready(function(){   
        // console.log(data);

    $("#masPNFmass").click(function(){  
        var r0 = document.getElementById('como').value;
        var r1 = document.getElementById('Carrera12').value;
        var r2 = document.getElementById('Duracion12').value;
        var r3 = document.getElementById('Titulo12').value;
        var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3;
        var url  = '../Mantenimiento/Guardar_PNF.php';
        // Mostar
        var Mostar = new Solicitud(data,url);  
        var respuesta = Mostar.Mostar(); 
});
});
</script> 
 