<div id="Reclamo1" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Reclamo</div>
        <div class="" >
        
         <div class="enjertopros" >        
            <form id="Reclamo2" method="" >
              <br>
              <br> 

            <div class="REC1parte1">
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

            <div class="REC1parte2">
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
                    
            <div class="REC1parte3">
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
 
            <div class="REC1parte4">
                    <center>  <b>Matricula *</b></center>
                    <div  class=" mat-form-field-SRM"></div>
                        <div>
                      <input type="text" class="robo" name="matricula" id="Matricula" required >
                        </div>
            </div>
                      
            <div class="REC1parte5">
                     <center>  <b>Sección *</b> </center>
                       <div  class=" mat-form-field-SRM"></div>
                        <div>
                        <input type="text"class="robo" name="seccion" id="seccion" required >
                        </div>
            </div>

            <div class="REC1parte6">
                    <center>  <b>Tipo de Error *</b> </center>
                      <div  class="mat-form-field-SRM"> </div>
                       <div>
                          <select class="robo" name="Tipo_Error" id="Tipo_Error" required>
                             <option value="">Opciones</option>
                              <option value="Nombre">Nombre</option>
                              <option value="Cedula">Cedula</option>
                              <option value="Nota">Nota</option>
                          </select>
                       </div>
             </div>
 
             <div class="REC1parte7">
                     <center>  <b>Error *</b></center>
                     <div  class=" mat-form-field-SRM"></div>
                         <div>
                       <input type="text" class="robo" name="Error" id="Error" required >
                         </div>
             </div>
                       
             <div class="REC1parte8">
                      <center>  <b>Solución *</b> </center>
                        <div  class=" mat-form-field-SRM"></div>
                         <div>
                         <input type="text"class="robo" name="solucion" id="solucion" required >
                         </div>
             </div>
          

                <div class="REC1parte9 canselarr">
                        <button class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC121">
                           <span class="mat-button-wrapper">Cancelar</span>
                        </button>
                    
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC121">
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
  $("#canselarOPC121").click(function (){
    $('#Reclamo1').addClass('atractivo');
    setTimeout(
              function(){
                $('#Reclamo1').removeClass('atractivo');
                $('#Reclamo1').addClass('listacono');
                },1400
              );
    return false;
  });
</script> 
<script>
document.querySelector("#procesarOPC121").addEventListener('click',procesarOPC121);
        function procesarOPC121()
        {       
                 
                var r0  = document.getElementById('cedula_usuario').value;
                var r1  = document.getElementById('Carrera').value;
                var r2  = document.getElementById('Trayecto').value;
                var r3  = document.getElementById('Fase').value;
                var r4  = document.getElementById('Matricula').value;
                var r5  = document.getElementById('seccion').value;
                var r6  = document.getElementById('Tipo_Error').value;
                var r7  = document.getElementById('Error').value;
                var r8 = document.getElementById('solucion').value;
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5+'&r6='+r6+'&r7='+r7+'&r8='+r8;
                var url  = '../Reclamos/pedir.php'; 
                // Mostar  
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();
        }
</script> 
 