  
  $(document).ready(function(){
    var datos=[];
        datos[0] = document.getElementById('como'); // ojo aux
        datos[1] = document.getElementById('como'); // ojo aux
        
//  
// 
              $("#Trayecto1").click(function(){  
                  $("#Trayecto1-1").addClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
                  $('#comunicasion1').removeAttr('style');
                  $('#comunicasion2').css('display' ,'none');
                  $('#comunicasion3').css('display' ,'none');
                  $('#comunicasion4').css('display' ,'none');
                            $.ajax({   
                                type:"POST",
                                url:"T1.php",  
                                data:datos,
                                success:function(res1){
                                $('#comunicasion1').html(res1); 
                                console.log(res1);
                                }
                            });
   });
   $("#Trayecto2").click(function(){  
             $("#Trayecto2-2").addClass('activos2');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
                  $('#comunicasion2').removeAttr('style');
                  $('#comunicasion1').css('display' ,'none');
                  $('#comunicasion3').css('display' ,'none');
                  $('#comunicasion4').css('display' ,'none');
                            $.ajax({   
                                type:"POST",
                                url:"T2.php",  
                                data:datos,
                                success:function(res1){
                                $('#comunicasion2').html(res1); 
                                console.log(res1);
                                }
                            });
   });
   $("#Trayecto3").click(function(){  
              $("#Trayecto3-3").addClass('activos3');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto4-4").removeClass('activos4');
                  $('#comunicasion3').removeAttr('style');
                  $('#comunicasion2').css('display' ,'none');
                  $('#comunicasion1').css('display' ,'none');
                  $('#comunicasion4').css('display' ,'none');
                            $.ajax({   
                                type:"POST",
                                url:"T3.php",  
                                data:datos,
                                success:function(res1){
                                $('#comunicasion3').html(res1); 
                                console.log(res1);
                                }
                            });
   });
   $("#Trayecto4").click(function(){  
                  $("#Trayecto4-4").addClass('activos4');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
                  $('#comunicasion4').removeAttr('style');
                  $('#comunicasion2').css('display' ,'none');
                  $('#comunicasion3').css('display' ,'none');
                  $('#comunicasion1').css('display' ,'none');
                            $.ajax({   
                                type:"POST",
                                url:"T4.php",  
                                data:datos,
                                success:function(res1){
                                $('#comunicasion4').html(res1); 
                                console.log(res1);
                                }
                            });
   });
   
});