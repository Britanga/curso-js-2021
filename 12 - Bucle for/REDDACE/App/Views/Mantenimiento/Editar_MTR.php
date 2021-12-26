
<link rel="stylesheet" href="../../../static/Css/editarMTR.css"> 
<div id="eMTR">
        <div class="titwl" >
            <h3>Buscar Materia</h3>
        </div>
        <form id="editar1_MTR" >
              <div class="OPC1parte0">
                  <center>  <b>Carrera *</b></center>
                      <div>
                         <select class="robo Pintar3" name="ct"  required id="ct">
                             <option value="">Electricidad</option>
                             <option value="">Informatica</option>
                         </select> 
                      </div>
                     </div>
                     <div class="OPC1parte1">
                  <center>  <b>Trayecto *</b></center>
                      <div>
                         <select class="robo" name="t1" id="t1" required>
                             <option value="">Opciones</option>
                             <option value="TS">TS</option>
                             <option value="T1">T1</option>
                             <option value="T3">T3</option>
                             <option value="T4">T4</option>  
                         </select>
                      </div>
                     </div>
                    
                      <div class="OPC1parte2">
                  <center>  <b>Fase *</b> </center>
                      <div>
                         <select class="robo" name="f1" id="f1" required>
                            <option value="">Opciones</option>
                             <option value="F1">F1</option>
                             <option value="F2">F2</option>
                             <option value="FC">FC</option>
                         </select>
                      </div>
                     </div>
         
                     <div class="OPC1parte3">
                  <center>  <b>Nombre *</b></center>
                            <div>
                            <select class="robo" name="n1"  required id="n1">
                            <option value="">Materia</option>
                         </select>  
                            </div>
                           </div>
                          
        </form>
        <div class="titwl" >
            <h3>Editar Materia</h3>
        </div>
        <form id="editar2_MTR" >

                      <div class="OPC1parte4">
                  <center>  <b>Estado *</b> </center>
                            <div>
                            <select class="robo" name="e2"  required id="e2">
                             <option value="">Opciones</option>
                             <option value="Activo">Activo</option>
                             <option value="Eliminado">Eliminado</option>
                         </select>  
                            </div>
                     </div>
                     <div class="OPC1parte5">
                  <center>  <b>Nombre Nuevo *</b> </center>
                            <div>
                            <input type="text"class="robo" name="n2" id="n2" required >
                            </div>
                     </div>
                     <div class="OPC1parte6"> 
                  <center>  <b>Trayecto Nuevo *</b> </center>
                            <div>
                                <select class="robo " name="t2"  required id="t2">
                                    <option value="">Opciones</option>
                                    <option value="TS">TS</option>
                                    <option value="T1">T1</option>
                                    <option value="T3">T3</option>
                                    <option value="T4">T4</option> 
                                </select>  
                            </div>
                     </div>
                     <div class="OPC1parte7">
                  <center>  <b>Fase Nueva *</b> </center>
                            <div>
                                <select class="robo" name="f2"  required id="f2">
                                    <option value="">Opciones</option>
                                    <option value="F1">F1</option>
                                    <option value="F2">F2</option>
                                    <option value="FC">FC</option>
                                </select>  
                            </div>
                     </div>        
                   
                    <div class="OPC1parte8 aceptar" >
                    <input type="hidden" name="codigo123" id="codigo123">
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="Ediatya">
                        <span>Procesar</span>
                     </button>
                 </div>
        </form>
</div>  
<div id="comunicasion">

</div> 
<!-- buscar 1 con carrera  -->
<script >
    $(document).ready(function(){
        $("#f1").change(function () {      
            $("#f1 option:selected").each(function () 
            { 
                 f1 = $(this).val();
            $("#t1 option:selected").each(function () { t1 = $(this).val();  });
            $("#ct option:selected").each(function () { ct = $(this).val();  }); 

            $.post("../Combo-box/Editar_materias.php",{ f1: f1, t1: t1, ct: ct },function(data)
                    {  $("#n1").html(data);  });      
            });
        })
    });
</script>  
<!-- buscar 2 con materia  -->
<script >
    $(document).ready(function(){
        $("#n1").change(function () {      
            $("#n1 option:selected").each(function () 
            { 
                m1 = $(this).val();
                        $.ajax({   
                            type:"POST", 
                            url:'../Combo-box/ver_materia.php',
                            dataType: 'json',
                            data:'m1='+m1, 
                            success:function(res1)   
                            {
                                // console.log(res1);
                                $("#e2").val(res1[7]); 
                                $("#t2").val(res1[4]);
                                $("#f2").val(res1[3]);
                            }
                        });           
            });
        })
    });
</script>  



<!-- resetea -->
<script>
 $(document).ready(function(){
    $("#ct").change(function () {
        $('#t1').find('option').remove().end().append('<option value="">Trayecto</option><option value="TS">TS</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#f1').find('option').remove().end().append('<option value="">fase</option><option value="F1">F1</option><option value="F2">F2</option><option value="FC">FC</option>').val('');
        $('#n1').find('option').remove().end().append('<option value="">Materia</option>').val('');
        $('#e2').find('option').remove().end().append('<option value="">Opciones</option><option value="Activo">Activo</option><option value="Eliminado">Eliminado</option>').val('');
        $('#t2').find('option').remove().end().append('<option value="">Trayecto</option><option value="TS">TS</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#f2').find('option').remove().end().append('<option value="">fase</option><option value="F1">F1</option><option value="F2">F2</option><option value="FC">FC</option>').val('');
        });
    $("#t1").change(function () {
        $('#f1').find('option').remove().end().append('<option value="">fase</option><option value="F1">F1</option><option value="F2">F2</option><option value="FC">FC</option>').val('');
        $('#n1').find('option').remove().end().append('<option value=""></option>').val('');
        $('#e2').find('option').remove().end().append('<option value="">Opciones</option><option value="Activo">Activo</option><option value="Eliminado">Eliminado</option>').val('');
        $('#t2').find('option').remove().end().append('<option value="">Trayecto</option><option value="TS">TS</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#f2').find('option').remove().end().append('<option value="">fase</option><option value="F1">F1</option><option value="F2">F2</option><option value="FC">FC</option>').val('');
        });
    $("#f1").change(function () {
        $('#n1').find('option').remove().end().append('<option value=""></option>').val('');
        $('#e2').find('option').remove().end().append('<option value="">Opciones</option><option value="Activo">Activo</option><option value="Eliminado">Eliminado</option>').val('');
        $('#t2').find('option').remove().end().append('<option value="">Trayecto</option><option value="TS">TS</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#f2').find('option').remove().end().append('<option value="">fase</option><option value="F1">F1</option><option value="F2">F2</option><option value="FC">FC</option>').val('');
        });
    $("#n1").change(function () {
        $('#e2').find('option').remove().end().append('<option value="">Opciones</option><option value="Activo">Activo</option><option value="Eliminado">Eliminado</option>').val('');
        $('#t2').find('option').remove().end().append('<option value="">Trayecto</option><option value="TS">TS</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#f2').find('option').remove().end().append('<option value="">fase</option><option value="F1">F1</option><option value="F2">F2</option><option value="FC">FC</option>').val('');
        });
    });
</script>


<!-- trabaso de dato de MATERIA -->
<script>
  $(document).ready(function(){
          $('#n1').change(function(){
            var Especialida=document.getElementById('n1').value;
                $('#codigo123').val(Especialida);
        return false;
          });
  });
  
   </script>
<!-- guardar -->
<script>  
$(document).ready(function () 
{  
  $("#Ediatya").click(function (){
            var data=$('#editar2_MTR').serializeArray(); 
            var url  ='MTR_modificado.php';  
            // console.log(data);
                var Mostar = new Solicitud(data,url);   
                var respuesta = Mostar.Mostar(); 
       return false;
    });
}); 
</script> 
<!-- buscar PNF -->
<script>
    $(document).ready(function(){
    
                var url  = '../Combo-box/D-box-PNF.php';
                    // Mostar
                    var data=1;
                    var Pintar3 = new Solicitud(data,url);   
                    var respuesta = Pintar3.Pintar3();

    });
</script>
