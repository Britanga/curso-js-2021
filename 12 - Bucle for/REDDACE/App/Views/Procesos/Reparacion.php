<link rel="stylesheet" href="../../../static/Css/proceso_in.css">

<div id="Proceso_IN" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal modal-250" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Proceso De Recuperacion</div>
        <div class="" >
        
         <div class="enjertopros" >        
            <form id="p_Intensivo" method="" >
              <br>
              <br> 
              <div class="OPC1parte0">
                  <center>  <b>Empiesa *</b></center>
                  <div  class="mat-form-field-SRM"></div>
                      <div>
                      <input class="robo" type="date" name="Empiesa" id="Empiesa" required>
                      </div>
                     </div>
                     <div class="OPC1parte1">
                  <center>  <b>Editar Datos *</b></center>
                  <div  class="mat-form-field-SRM"></div>
                      <div>
                      <input class="robo" type="date" name="Editar_d" id="Editar_d" required>
                      </div>
                     </div>
                    
                      <div class="OPC1parte2">
                   <center>  <b>Culmina *</b> </center>
                     <div  class="mat-form-field-SRM"> </div>
                      <div>
                          <input class="robo" type="date" name="Culmina" id="Culmina" required>
                      </div>
                     </div>
         
              
                     <div class="OPC1parte5 canselarr">
                        <button class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC1">
                           <span class="mat-button-wrapper">Cancelar</span>
                        </button>
                    </div>
                    <div class="OPC1parte6 aceptar" >
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC1">
                        <span>Abrir</span>
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
    $('#Proceso_IN').addClass('atractivo');
    setTimeout(
              function(){
                $('#Proceso_IN').removeClass('atractivo');
                $('#Proceso_IN').addClass('listacono');
                },1400 
              );
    return false;
  });
</script> 
<script>
document.querySelector("#procesarOPC1").addEventListener('click',procesarOPC1);
        function procesarOPC1()
        {       
                
                var r0 = document.getElementById('Empiesa').value;
                var r1 = document.getElementById('Editar_d').value;
                var r2 = document.getElementById('Culmina').value;
                var r3 = document.getElementById('como').value; 
                var r4 = 'Reparacion';
                var r5 = 'Reparacion';
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5;
                var url  = '../Procesos/Abrir_Proceso.php';
                // Mostar
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();
        }
</script> 
