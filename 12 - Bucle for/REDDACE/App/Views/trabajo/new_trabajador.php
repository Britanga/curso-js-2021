
<link rel="stylesheet" href="../../../static/Css/reclamo.css">
<style>
form#Reclamo2{
grid-template-rows: repeat(3,52px) 40px;
grid-template-areas:"parte3 parte4" 
                    "parte5 parte6" 
                    "parte7 parte8" 
                    "parte9 parte9 ";
    }
.maguia-modal
{
    height: auto;
}
</style>
<div id="Reclamo1" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Nuevo Trabajador</div>
        <div class="" >
        
         <div class="enjertopros" >        
            <form id="Reclamo2" method="" >
              <br>
              <br> 



                    
            <div class="REC1parte3">
                   <center>  <b>Trabajadores *</b> </center>
                     <div  class="mat-form-field-SRM"> </div>
                      <div>
                         <select class="robo Pintar4" name="Trabajadores" id="Trabajadores" required>
                         </select>
                      </div>
            </div>

            <div class="REC1parte6">
                    <center>  <b>Contratad@ *</b></center>
                    <div  class=" mat-form-field-SRM"></div>
                        <div>
                      <input type="date" class="robo" name="Contratado" id="Contratado" required >
                        </div>
            </div>
                      
            <div class="REC1parte5">
                     <center>  <b>Ocupacion *</b> </center>
                       <div  class=" mat-form-field-SRM"></div>
                        <div>
                        <input type="text"class="robo" name="Ocupacion" id="Ocupacion" required >
                        </div>
            </div>

            <div class="REC1parte4">
                    <center>  <b>Area *</b> </center>
                      <div  class="mat-form-field-SRM"> </div>
                       <div>
                          <select class="robo Pintar3" name="Area" id="Area" required>
                          </select>
                       </div>
             </div>
 
             <div class="REC1parte7">
                     <center>  <b>Codigo *</b></center>
                     <div  class=" mat-form-field-SRM"></div>
                         <div>
                       <input type="text" class="robo" name="Codigo" id="Codigo" required >
                         </div>
             </div>
                       
             <div class="REC1parte8">
                      <center>  <b>Salidad *</b> </center>
                        <div  class=" mat-form-field-SRM"></div>
                         <div>
                         <input type="date"class="robo" name="Salidad" id="Salidad"  >
                         </div>
             </div>
          

                <div class="REC1parte9 canselarr">
                        <button class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC121">
                           <span class="mat-button-wrapper">Cancelar</span>
                        </button>
                    
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC121">
                        <span>Contratar</span>
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
                var r0  = document.getElementById('Trabajadores').value;
                var r1  = document.getElementById('Ocupacion').value;
                var r2  = document.getElementById('Contratado').value;
                var r3  = document.getElementById('Area').value;
                var r4  = document.getElementById('Codigo').value;
                var r5  = document.getElementById('Salidad').value;
                var r6  = document.getElementById('como').value;
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5+'&r6='+r6;
                var url  = '../trabajo/Contratar.php'; 
                // Mostar  
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();
        }
</script> 

<!-- buscar PNF -->
<script>
    $(document).ready(function(){
                var url  = '../Combo-box/D-box-PNF.php';
                    var data=1;
                    var Pintar3 = new Solicitud(data,url);   
                    var respuesta = Pintar3.Pintar3();
    });
</script>
 
<!-- buscar Trabasadores -->
<script>
    $(document).ready(function(){
                var url  = '../Combo-box/trabasadores.php';
                    var data=1;
                    var Pintar4 = new Solicitud(data,url);   
                    var respuesta = Pintar4.Pintar4();
    });
</script>


