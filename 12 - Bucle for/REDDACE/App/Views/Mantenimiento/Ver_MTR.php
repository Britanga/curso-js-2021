
<link rel="stylesheet" href="../../../static/Css/verMTR.css"> 
<div id="vMTR">
        <div class="titwl" >
            <h3>Buscar Carrera</h3>
        </div>
        <form id="ver_MTR" >
              <div class="OPC1parte0">
                  <center>  <b>Carrera *</b></center>
                      <div>
                         <select class="robo Pintar3" name="ct12"  required id="ct12">
                         </select> 
                      </div>
                     </div>
                          
        </form>
        <div class="titwl" >
            <h3>Materias</h3>
        </div>
        <div class="scrol2">
            <table cellpadding="10">
            <thead>
                    <tr id="ver24">
                        <th>N:</th> 
                        <th>Nombre</th>
                        <th>Trayecto</th> 
                        <th>Fase</th> 
                        <th>Estado</th> 
                    </tr>
              </thead>
                  <tbody class="Pintar4">
                    
                    </tbody>
            </table>
    </div>
        
</div>  
<div id="comunicasion">

</div> 

<!-- buscar 2 con materia  -->
<script >
    $(document).ready(function(){
        $("#ct12").change(function () {
            $("#ct12 option:selected").each(function () {
                                 Carreras = $(this).val();
                $.post("../Combo-box/lista_materia.php", { Carreras: Carreras }, function(data){
                    $(".Pintar4").html(data);    
                });        
            });
        })    
    });
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
