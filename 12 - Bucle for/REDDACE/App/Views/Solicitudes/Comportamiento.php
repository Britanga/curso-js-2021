<style>
.OPC1parte0 {grid-area: parte0;}
.OPC1parte1 {grid-area: parte1;}
.OPC1parte2 {grid-area: parte2;}
.OPC1parte3 {grid-area: parte3;}
.OPC1parte4 {grid-area: parte4;}
.OPC1parte5 {grid-area: parte5;}
.OPC1parte6 {grid-area: parte6;}

</style>

<div id="Recork_Nota" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Carta De Comportamiento</div>
        <div class="" >
        
        <div class="enjertopros" >        
            <form id="recork" method="" >
              <br>
              <br> 
              <div class="OPC1parte0">
                  <center>  <b>Carrera *</b></center>
                  <div  class="mat-form-field-SRM"></div>
                      <div>
                         <select class="robo" name="Carrera"  required id="Carrera">
                             <option value="">Opciones</option>
                             <option value="Informatica">Informatica</option>
                             <option value="Electricidad">Electricidad</option> 
                         </select>
                      </div>
                     </div>
                     <div class="OPC1parte1">
                  <center>  <b>Trayecto *</b></center>
                  <div  class="mat-form-field-SRM"></div>
                      <div>
                         <select class="robo" name="Trayecto" id="Trayecto" required>
                             <option value="">Opciones</option>
                             <option value="Ts">Ts</option>
                             <option value="T1">T1</option>
                             <option value="T3">T3</option>
                             <option value="T4">T4</option>  
                         </select>
                      </div>
                     </div>
                    
                      <div class="OPC1parte2">
                   <center>  <b>Fase *</b> </center>
                     <div  class="mat-form-field-SRM"> </div>
                      <div>
                         <select class="robo" name="Fase" id="Fase" required>
                            <option value="">Opciones</option>
                             <option value="F1">F1</option>
                             <option value="F2">F2</option>
                         </select>
                      </div>
                     </div>
         
                     <div class="OPC1parte3">
                        <center>  <b>Matricula *</b></center>
                        <div  class=" mat-form-field-SRM"></div>
                            <div>
                          <input type="text" class="robo" name="matricula" id="Matricula" required >
                            </div>
                           </div>
                          
                     <div class="OPC1parte4">
                         <center>  <b>Seccion *</b> </center>
                           <div  class=" mat-form-field-SRM"></div>
                            <div>
                            <input type="text"class="robo" name="seccion" id="seccion" required >
                            </div>
                     </div>
              
                     <div class="OPC1parte5 canselarr">
                        <button class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC1">
                           <span class="mat-button-wrapper">Cancelar</span>
                        </button>
                    </div>
                    <div class="OPC1parte6 aceptar" >
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC1">
                        <span>Procesar</span>
                     </button>
                 </div>
                 </form>
            </div>
         
        <div class="maguia-button__loader">
          <div></div>
          <div></div>
          <div></div>
        </div>
    
      </div></div></div></div>
      <div id="comunicasion">

      </div>
      <script>
  $("#canselarOPC1").click(function (){
    $('#Recork_Nota').addClass('atractivo');
    setTimeout(
              function(){
                $('#Recork_Nota').removeClass('atractivo');
                $('#Recork_Nota').addClass('listacono');
                },1400
              );
    return false;
  });
</script>
<script>
document.querySelector("#procesarOPC1").addEventListener('click',procesarOPC1);
        function procesarOPC1()
        {        
                var r0 = document.getElementById('como').value;
                var r1 = document.getElementById('Carrera').value;
                var r2 = document.getElementById('Trayecto').value;
                var r3 = document.getElementById('Fase').value;
                var r4 = document.getElementById('Matricula').value;
                var r5 = document.getElementById('seccion').value;
                var r6 = 'Carta de Comportamiento';
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5+'&r6='+r6;
                var url  = '../Solicitudes/pedir.php';
                // Mostar
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();
        }
</script> 
