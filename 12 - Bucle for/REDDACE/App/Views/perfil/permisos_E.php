<?php
 
    ################################################
    include('../../../database/data1.php'); 
    ################################################
       $controlando= new desiciones($donde='Estudiante',$info=$LCI,$opc='Tiempo');
       $r= $controlando->realizar(); 
  if ($r[0] == '' || $r[0] == null) { ?>
  <style>
   form#Reclamo2{
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(3 ,35px) 40px;
    grid-template-areas: "Inpu0" "inpu1" "inpu2" "boten";
    gap: 14px;
    padding: 10px;
    }
    .maguia-modal {
    width: none;
    max-height: none;
    height: 250px;
    width: 300px;
    padding: 8px;
    }
    .qwer {
        grid-area: boten;
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-between;
        align-content: center;
        width: 100%;
    }
.required{
    display:none;
}
  </style>
<div id="Reclamo" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
     <div class="maguia-modal" role="dialog" aria-modal="true">
         <div class="">
   
           </div>
           <div class="maguia-title" >Datos Necesarios</div>
       <div class="" >
       
        <div class="enjertopros" >        
           <form id="Reclamo2" method="" >

           <div class="R1">
                     <div>

                     <select name="inscrito" id="inscrito" class="robo" required>
                            <option value="">Ya esta inscrito</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                     </select>
                     </div>
           </div>

         <div class="R2">
                     <div>
                         <input  required  class="robo"  placeholder="Matricula"  id="Matricula" name="Matricula">
                     </div>
           </div>

         <div class="R3">
                     <div>

                     <select class="robo Pintar3" required  id="Carreras" name="Carreras">
                     </select>
                     </div>
           </div>
               <div class="R9 canselarr qwer">
                       <a href="../../Views/salir/salir.php" class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC121">
                          <span class="mat-button-wrapper">Cancelar</span>
                       </a>
                    
                    <button  type="button" class="boton mat-raised-button efecto-btn-1" id="codigoAnalista">
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
<input type="hidden"   value="<?php echo $LCI   ;?>"  name="cedula_usuario"  id="cedula_usuario">
<input type="hidden"   value="<?php echo $LCI   ;?>"  name="Cedula"          id="como">
<input type="hidden"   value="<?php echo $LId   ;?>"  name="idd"             id="idd">
<input type="hidden"   value="<?php echo $LUser ;?>"  name="usuar"           id="usuar">

<input type="hidden" name="algoNo"  id="algoNo">
<script src="../../../static/Js/clases.js"></script>
<script src="../../../static/Js/envio.js"></script> 
<script>
         $(document).ready(function () { 
            var r0  = document.getElementById('inscrito');
            var r1  = document.getElementById('Matricula');
            var r2  = document.getElementById('algoNo');
            var r3  = document.getElementById('como');
            var r4  = document.getElementById('idd');
            var r5  = document.getElementById('usuar');
             $("#codigoAnalista").click(function (){ 
              var data='r0='+r0.value+'&r1='+r1.value+'&r2='+r2.value+'&r3='+r3.value+'&r4='+r4.value+'&r5='+r5.value;
                console.log(data);
                $.ajax({   
                        type:"POST",
                        url:"../Estudiante/verifica.php", 
                        data:data,
                        success:function(res1)
                        {
                            if(res1 == 333)
                            { 
                                swal ( "Disculpe" ,  "Debe de facilitar todo los datos" ,  "warning" );
                            } 
                            if(res1 == 2)
                            { 
                                swal ( "Disculpe" ,  "Ocurrio un error" ,  "Error" );
                            } 
                       
                            if(res1 != 333 && res1 != 2)
                            { 
                                // console.log(res1);  
                                location.href=res1;
                            }
                        }
                }); 
                return false;
            }); 
            });
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
<script>
 $(document).ready(function(){
          $('#Carreras').change(function(){
            var Especialida=document.getElementById('Carreras').value;
                $('#algoNo').val(Especialida);
        return false;
          });
  });
  $(document).ready(function(){
          $('#inscrito').change(function(){
            var inscrito=document.getElementById('inscrito').value;
            if (inscrito == '' || inscrito == null) 
            {
                return false;
            }
            if (inscrito == 'Si') 
            {
            $('#Matricula').attr('required', true);
            $('#Carreras').attr('required', true);
            $('#Matricula').removeClass('required');
            $('#Carreras').removeClass('required');
                return false;
            }
            if (inscrito == 'No') 
            {
            $('#Matricula').attr('required', false);
            $('#Carreras').attr('required', false);
            $('#Matricula').addClass('required');
            $('#Carreras').addClass('required');
                return false;
            }
            return false;
          });
  });
</script>
  <?php
      die(); 
  };