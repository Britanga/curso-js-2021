$(document).ready(function ()
{
    var Cedula  = document.getElementById('como').value;
            var Usuario = 'como'; 
            var Pintar = new Solicitud_Menu(Cedula);
    $("#opcS1").click(function (){ 
                $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcS1(); 
        return false;
    });  
    $("#opcS2").click(function (){
        $('.elcontenido').css('display' ,'block');
                    Mostar =  Pintar.opcS2();
        return false;
    });
    $("#opcS3").click(function (){
        $('.elcontenido').css('display' ,'block');
                    Mostar =  Pintar.opcS3();
        return false;
    });
    $("#opcS4").click(function (){
                    Mostar =  Pintar.opcS4();
        return false; 
    }); 
    $("#opcR1").click(function (){
        $('.elcontenido').css('display' ,'block');
                    Mostar =  Pintar.opcR1();
        return false;
    });
    $("#opcI1").click(function (){
        $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcI1();  
        return false;
    });
    $("#opcIAux").click(function (){
        $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcIAux();  
        return false;
    });
    $("#opcI2").click(function (){
        $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcI2();  
        return false; 
    });
    $("#opcC1").click(function (){
        $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcC1();  
        return false; 
    });
    $("#opcC2").click(function (){
        $('.elcontenido').css('display' ,'block');
                Mostar =  Pintar.opcC2();  
        return false; 
    }); 
    $("#opcI3").click(function (){
                Mostar =  Pintar.opcI3();  
        return false; 
    });
    // $("#opcC1").ready(function (){
    //     $('.elcontenido').css('display' ,'block');
    //             Mostar =  Pintar.opcC1();  
    //     return false; 
    // });
}); 