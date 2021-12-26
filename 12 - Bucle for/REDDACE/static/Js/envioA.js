$(document).ready(function ()
{ 
    var Cedula  = document.getElementById('como').value;
            var Usuario = 'como'; 
            var Pintar = new Solicitud_Menu(Cedula);
    $("#opcI4").click(function (){
                Mostar =  Pintar.opcI4();  
        return false; 
    });
    $("#opcI5").click(function (){
        Mostar =  Pintar.opcI5();  
        return false; 
    });
    $("#opc").click(function (){ 
                $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opc(); 
      return false;
    }); 
    $("#opcI6").click(function (){ 
                Mostar =  Pintar.opcI6(); 
      return false;
    }); 
    $("#opcI7").click(function (){
        Mostar =  Pintar.opcI7();  
        return false; 
    });
});

 