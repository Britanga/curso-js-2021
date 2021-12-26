function QuiEnEres(e){
      var dato=e;
            $.ajax({
                type:'POST',
                url:'../../../Generator/defaul/defaul.php',
                data:datos,
                success: function(datos)
                {
                    setTimeout(function()
                    {
                        console.log(datos);
                        $('#ver-pdf').modal({
                        show:true,
                        backdrop:'static'
                        });	 
                    },20); 
                    
                    PDFObject.embed("../../../Temp/reporte.pdf", "#view_pdf");
                } 
            });

    return false;
}
function QuiEnEres2(e){
    var dato=e;
          $.ajax({
              type:'POST',
              url:'Tb_most_CLA.php',
              data:datos,
              success: function(datos)
              {
  
                 
              } 
          });

  return false;
}
/*
 $("#uno").load("../../Debug/trabajador/trabajador.php",{user:el_user,tipo:el_tipo,cedula:al_cedula});
*/ 

