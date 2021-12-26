
<link rel="stylesheet" href="../../../static/Css/mas.css"> 
<div id="mMTR">
        <div class="titwl" >
            <h3>Nueva Materia</h3>
        </div>
        <form id="Mas_MTR" >
              <div class="OPC1parte0">
                  <center>  <b>Carrera *</b></center>
                      <div>
                         <select class="robo Pintar3" name="Carrera"  required id="Carrera">
                             <option value="">Opciones</option>
                         </select> 
                      </div>
                     </div>
                     <div class="OPC1parte1">
                  <center>  <b>Trayecto *</b></center>
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
                      <div>
                         <select class="robo" name="Fase" id="Fase" required>
                            <option value="">Opciones</option>
                             <option value="F1">F1</option>
                             <option value="F2">F2</option>
                             <option value="FC">FC</option>
                         </select>
                      </div>
                     </div>
         
                     <div class="OPC1parte3">
                        <center>  <b>Codigo *</b></center>
                            <div>
                          <input type="text" class="robo" name="Codigo" id="Codigo" required >
                            </div>
                           </div>
                          
                     <div class="OPC1parte4">
                         <center>  <b>Nombre *</b> </center>
                            <div>
                            <input type="text"class="robo" name="Nombre" id="Nombre" required >
                            </div>
                     </div>
              
                   
                    <div class="OPC1parte6 aceptar" >
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC1">
                        <span>Procesar</span>
                     </button>
                 </div>
      </form>
</div>  
<div id="comunicasion">

</div> 
<script>
  $("#canselarOPC1").click(function (){
    $('#Mas_Materia').addClass('atractivo');
    setTimeout(
              function(){
                $('#Mas_Materia').removeClass('atractivo');
                $('#Mas_Materia').addClass('listacono');
                },1400
              );
    return false;
  });
</script> 
<script>
document.querySelector("#procesarOPC1").addEventListener('click',procesarOPC1);
        function procesarOPC1()
        {       
                
                var r0 = document.getElementById('cedula_usuario').value; 
                var r1 = document.getElementById('Carrera').value;
                var r2 = document.getElementById('Trayecto').value;
                var r3 = document.getElementById('Fase').value;
                var r4 = document.getElementById('Codigo').value;
                var r5 = document.getElementById('Nombre').value; 
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5;
                var url  = '../Mantenimiento/Guardar_MTR.php';
                // Mostar
                // console.log(url);
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();
        }
</script> 

<script>
$(document).ready(function(){
   
            var url  = '../Combo-box/D-box-PNF.php';
                // Mostar
                var data=1;
                var Pintar3 = new Solicitud(data,url);   
                var respuesta = Pintar3.Pintar3();

});
</script>