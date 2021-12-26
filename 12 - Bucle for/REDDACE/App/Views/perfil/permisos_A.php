<?php

    ################################################
    include('../../../database/data1.php'); 
    ################################################
       $controlando= new desiciones($donde='Analista',$info=$LCI,$opc='Confirmar');
       $r= $controlando->realizar(); 

  if ($r[0] == '' || $r[0] == null || $r[0] == 'no') { ?>
  <style>
   form#Reclamo2{
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(2 ,45px);
    grid-template-areas: "Inpu" "boten";
    }
    .maguia-modal {
    width: none;
    max-height: none;
    height: 200px;
    width: 300px;
    padding: 8px;
    }
    .qwer {
    grid-area: "boten";
    justify-self: center;
    justify-content: ;
    display: flex;
    flex-flow: row;
    justify-content: center;
    justify-items: center;
    align-items: center;
    align-content: space-evenly;
    }
  </style>
<div id="Reclamo1" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
     <div class="maguia-modal" role="dialog" aria-modal="true">
         <div class="">
   
           </div>
           <div class="maguia-title" >Codigo</div>
       <div class="" >
       
        <div class="enjertopros" >        
           <form id="Reclamo2" method="" >

           <div class="REC1parte1">
                 <center>  <b>codigo *</b></center>
                 <div  class="mat-form-field-SRM"></div>
                     <div>
                        <input value='' required  class="robo" type="text" name="cidigito" id="cidigito" placeholder="Codigo de Aprovasion">
                     </div>
           </div>



               <div class="REC1parte9 canselarr qwer">
                       <a href="../../Views/salir/salir.php" class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC121">
                          <span class="mat-button-wrapper">Cancelar</span>
                       </a>
                    
                    <button  type="button" class="boton mat-raised-button efecto-btn-1" id="codigoAnalista">
                       <span>Procesar</span>
                    </button>
                    <input  type="hidden" name="cedula1235" id="cedula1235"  value="<?php echo$LCI ?>">

                    
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
         $(document).ready(function () { 
            var cidigito  = document.getElementById('cidigito');
            var cedula    = document.getElementById('cedula1235').value;
             $("#codigoAnalista").click(function (){ 
                var codigo = cidigito.value;
               
                $.ajax({   
              type:"POST",
              url:"../analista/verifica.php", 
             data:'codigo='+codigo+'&cedula='+cedula,
              success:function(res1)
              {
                if(res1 == 333)
               
                { 
                    swal ( "Disculpe" ,  "El codigo no puede estar vacio" ,  "info" );
                } 
                if(res1 == 2)
               
                { 
                    swal ( "Disculpe" ,  "El codigo No es valido" ,  "Error" );
                } 
                if(res1 != 333 && res1 != 2 )
                { 
                    location.href=res1;
                }
                                
              }
            }); 
                return false;
            }); 
            });
</script>
  <?php
      die(); 
  };