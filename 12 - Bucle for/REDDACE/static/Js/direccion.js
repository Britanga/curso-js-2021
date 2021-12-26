$(document).ready(function(){
    $("#cbx_estado").change(function () {

                            $('#cbx_municipio').find('option').remove().end().append('<option value=""></option>').val('');
                            $('#cbx_localidad').find('option').remove().end().append('<option value=""></option>').val('');
        
        $("#cbx_estado option:selected").each(function () {
                                    Codigo_Estado = $(this).val();

            
            $.post("../Combo-box/D-box-municipio.php", { Codigo_Estado: Codigo_Estado }, function(data){
                $("#cbx_municipio").html(data);
               
            });      

               
        }); 
    })
});



$(document).ready(function(){
    $("#cbx_municipio").change(function () {
        $("#cbx_municipio option:selected").each(function () {
            Codigo_Municipio = $(this).val();
            $.post("../Combo-box/D-box-parroquia.php", { Codigo_Municipio: Codigo_Municipio }, function(data){
                $("#cbx_localidad").html(data);
            });            
        });
    })
});









