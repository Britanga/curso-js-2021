$(document).ready(function ()
{ 
    var Cedula  = document.getElementById('como').value;
            var Usuario = 'como'; 
            var Pintar = new Solicitud_Menu(Cedula);

    $("#opcM3").click(function (){ 
               $('.elcontenido').css('display' ,'block');
               Mostar =  Pintar.opcM3(); 
        return false;
    }); 
    $("#opcM4").click(function (){ 
               Mostar =  Pintar.opcM4();
        return false;
    });
    $("#opcA1").click(function (){ 
               $('.elcontenido').css('display' ,'block');
               Mostar =  Pintar.opcA1(); 
        return false;
    });    
    $("#opcA2").click(function (){ 
               $('.elcontenido').css('display' ,'block');
               Mostar =  Pintar.opcA2(); 
        return false;
    });       
    $("#opcA3").click(function (){ 
               $('.elcontenido').css('display' ,'block');
               Mostar =  Pintar.opcA3(); 
        return false;
    });   
    $("#opcA4").click(function (){ 
               $('.elcontenido').css('display' ,'block');
               Mostar =  Pintar.opcA4(); 
        return false;
    });   
    $("#opcTG1").click(function (){
                $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcTG1();  
        return false; 
    }); 
    $("#opcTG2").click(function (){
                Mostar =  Pintar.opcTG2();  
        return false; 
    });
    
});

