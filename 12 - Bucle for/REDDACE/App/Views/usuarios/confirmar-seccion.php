<?php

  echo '<section id="login2">
  <div id="msjpros45" style="display: none;
  opacity: 0;"  class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
        <span class="swal-icon--success__line swal-icon--success__line--long"></span>
        <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
    
        <div class="swal-icon--success__ring"></div>
        <div class="swal-icon--success__hide-corners"></div>
        </div><div class="maguia-title" style="">Disponible</div><div class="maguia-text" style="">Enhorabuena Ya Puede Iniciar Sesión.</div><div class="maguia-footer"><div class="maguia-button-container">
    
        <button class="maguia-button maguia-button--confirm" id="listos">OK</button>
    
        <div class="maguia-button__loader">
          <div></div>
          <div></div>
          <div></div>
        </div>
    
      </div></div></div></div>

  <div id="sinCI2" style="display: none; opacity: 0;" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
  <div class="maguia-modal" role="dialog" aria-modal="true">
      <div class="">

        </div>
        <div class="maguia-title" id="respuestas">Seguridad </div>
    <div class="" >
     
     <div class="veamos" >        
        <form id="Nuevaparte2" class="Nuevaparte">
                 <div class="Nuevaparte1">
                           <center>  <b>Contraseña  *</b></center>
              
                        <div>
                            <input type="password" class="robo3" name="pass1" id="pass1" required>
                        </div>
                 </div>
                  <div class="Nuevaparte2">
                    <center>  <b>Repita la Contraseña *</b> </center>
                 
                        <div> 
                            <input type="password" class="robo3" name="pass2" required id="pass2">
                        </div>
                 </div>
    
                 <div class="Nuevaparte3">
                 <center>  <b>Pregunta 1 *</b></center>
                 
                     <div>
                          <input type="text" class="robo3" name="Pregunta1"  id="prueva1" disabled>
                         
                     </div>
                    </div>
                   
              <div class="Nuevaparte4">
                  <center>  <b>Respuesta  *</b> </center>
                    
                     <div>
                     <input type="text" class="robo3" name="Respuesta1" required>
                     </div>
              </div>
                 <div class="Nuevaparte5">
                 <center>  <b>Pregunta 2 *</b></center>
                 
                     <div>
                      
                     <input type="text" class="robo3" name="Pregunta2"  id="prueva2" disabled>
                     </div>
                    </div>
                   
              <div class="Nuevaparte6">
                  <center>  <b>Respuesta  *</b> </center>
                    
                     <div>
                     <input type="text" class="robo3" name="Respuesta2" required>
                     </div>
              </div>
           
              <div class="Nuevaparte7">
              <center>  <b>Pregunta 3 *</b></center>
              
                  <div>
                 
                  <input type="text" class="robo3" name="Pregunta3"  id="prueva3" disabled>
                  </div>
                 </div>
                
           <div class="Nuevaparte8">
               <center>  <b>Respuesta  *</b> </center>
                 
                  <div>
                  <input type="text" class="robo3" name="Respuesta3" required>
                  </div>
           </div>
          
                      
                 
                <div class="Nuevaparte9 aceptar" style="place-content: space-evenly;" >
                <input type="hidden" class="robo3" name="usr"  id="usr">
                <input type="hidden" class="robo3" name="pass_conf"  id="pass_conf">
                <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="canselar2N">
                <span>Canselar</span>
                 </button>
                 <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar2N">
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

  </div></div></div>
</div>
  <div id="R2">

  </div>
          
          
  <div class="container" id="sera">
    <div class="forms-container">
      <div class="signin-signup">
        <form  class="sign-in-form forlog" id="re">
          <h2 class="title">Recuperar Datos</h2>
          <div class="input-field">
          <i class="icon icon-user"></i>
          <input type="text" placeholder="Usuario" class="estoes" name="Usuario">
        </div>
        <div class="input-field">
        <i class="icon icon-address-card-o"></i>
        <input type="text" placeholder="Cedula" class="estoes" name="cedula">
      </div>
 
          <div>
          <input type="button" value="Comparar" class="btn solid" id="compa" />
          <input type="submit" value="Regresar" style="background-image: none;" class="btn solid" id="regre" />
        </div> 
<div id="mensajes"></div>
<p class="social-text">Redes Sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <img class="social" src="../../static/Icon/redes_sosiales/png/facebook.png"></img>
            </a>
            <a href="#" class="social-icon">
              <img class="social" src="../../static/Icon/redes_sosiales/png/youtube.png"></img>
            </a>
            <a href="#" class="social-icon">
              <img class="social" src="../../static/Icon/redes_sosiales/png/hangouts.png"></img>
            </a>
            <a href="#" class="social-icon">
              <img class="social" src="../../static/Icon/redes_sosiales/png/instagram.png"></img>
            </a>
            <a href="#" class="social-icon">
              <img class="social" src="../../static/Icon/redes_sosiales/png/twitter.png"></img>
            </a>
          </div>
        </form>
       
      </div>
    </div>
    </div>
</section>';
?>



<script language='javascript'> 
  $(document).ready(function(){
    $('#regre').click(function(){
          location.href='login.php';
        });
        $('#canselar2N').click(function(){
          location.href='login.php';
        });
        $('#listos').click(function(){
          location.href='login.php';
      });
  });
</script>  
  <script>
$(document).ready(function(){
        $('#pass2').keyup(function(){
          var pass1=document.getElementById('pass1').value;
          var pass2=document.getElementById('pass2').value;
          if(pass1=='' && pass2==''){
            return false;
          };
            if (pass1 != pass2) {
              $('#respuestas').html("<p class='fracaso_login'>Las Contraseñas No Coinciden!</p>");
              $('#pass_conf').val('0');
              return false;
            }else{
              $('#respuestas').html("<p class='exito1'>Las Contraseñas Coinciden!</p>");
              $('#pass_conf').val('1');
              return false;
            }
        });
			return false;
});
 </script>


 <script type="text/javascript">
	$(document).ready(function(){
		$('#procesar2N').click(function(){
      var datos=$('#Nuevaparte2').serializeArray();     
      var pass_conf=document.getElementById('pass_conf').value; 
      var pass=datos[1].value; 
            if (pass.length <=4 || pass.length >= 10 ) 
            {
              $('#respuestas').html("<p class='fracaso_login'>Su contraseña debe de ser Mayor a 4 y Menor a 10 Caracteres!</p>");
              return false;
            };
            if (pass_conf ==0 ) 
            {
              $('#respuestas').html("<p class='fracaso_login'>Su Contraseña No Coincide</p>");
              return false;
            };
            if (pass_conf == 1) 
            {
              var codigo = new encriptado();
              var oscar = codigo.comoEncriptar(datos[1].value);
              datos[1].value = oscar;
            $.ajax({  
                    type:"POST",
                    url:"usuarios/nuevapass.php", 
                    data:datos, 
                    success:function(res1)
                    {
                      if(res1 == 333)
                      {
                        swal ( "Disculpe" ,  "Los Campos no pueden estar vacios" ,  "error" );
                      }
                      if(res1 == 1)
                      {
                        $("#msjpros45").removeAttr('style');
                        $('#sinCI2').css('display', 'none', 'opacity', '0');
                        $('#re').css('display', 'none', 'opacity', '0');
                      } 
                      if(res1 == 0)
                      {
                        swal ( "Disculpe" ,  "Los Datos Son Incorrectos" ,  "error" );
                      }
                    } 
                 });
			return false;
            }
		});
    });
		
</script> 

<script type="text/javascript">
	$(document).ready(function(){
		$('#compa').click(function(){
            var datos=$('#re').serializeArray();            
    // console.log(datos);
            $.ajax({  
                    type:"POST", 
                    url:"usuarios/recuperar-datos.php",
                    dataType: 'json',
                    data:datos, 
                    success:function(res1)
                    { 
                      if (res1.resul1 == 2 || res1.resul1 == 3) {
                        swal ( "Disculpe" ,  "Datos Invalidos" ,  "info" ) ;
                        return false;
                      }
                      else
                      { 
                          $('#sinCI2').attr('style',false);
                             $("#prueva1").val(res1.resul1);  
                             $("#prueva2").val(res1.resul2);
                             $("#prueva3").val(res1.resul3);
                             $("#usr").val(res1.resul4);
                      }
                    }
                 });
			return false;
    });
    });
</script>
