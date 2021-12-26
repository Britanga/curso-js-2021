<?php
error_reporting(0); 
$fracaso=$_GET['fracaso'];
 ?> 

<!DOCTYPE html>
<html lang="es"> 
<head>
       
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
   <title>REDDACE</title>
   <link rel="shortcut icon" href="../../static/Img/Reddace.svg" type="image/x-icon">
   <link rel="stylesheet"    href="../../static/Css/bootstrap.min.css">
   <link rel="stylesheet"    href="../../static/Css/font.css">
   <link rel="stylesheet"    href="../../static/Css/normal.css">
   <link rel="stylesheet"    href="../../static/Icon/style.css">
   <link rel="stylesheet"    href="../../static/Css/placeholder.css">
   <link rel="stylesheet"    href="../../static/Css/moda.css">
   <link rel="stylesheet"    href="../../static/Css/tipy.css">
   <link rel="stylesheet"    href="../../static/Animation/aos.css">
  
                <!-- CSS PROPIOS-->
   <link rel="stylesheet" href="../../static/Css/login.css" />
   <link rel="stylesheet" href="../../static/Css/Dasce.css" />
   <link rel="stylesheet" href="../../static/Css/Reddasce.css" /> 
   <link rel="stylesheet" href="../../static/Css/Reddasce2.css" />
   <link rel="stylesheet" href="../../static/Css/mensajes.css">
   <link rel="stylesheet" href="../../static/Css/msj_emergente.css">
   <link rel="stylesheet" href="../../static/Css/nueva.css">
   <link rel="stylesheet" href="../../static/Css/robo.css">
<!-- <?php
// include ('archive/link_login.php');
// include ('archive/.php'); 
?> --> 
</head>
<style>
.icon-facebook-square{
  color: #000;
}

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50">


          <header id="adso">
            <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
                <div class="container-fluid">
                    <img src="../../static/Img/Reddace.svg" id="copos">
                    <a class="navbar-brand acopos" href="#">REDDASCE</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                    <a class="nav-link" href="uni/IUPTJAA.html">UPTJAA<span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link"       id="ENTRAR1" href="#LOGIN">ACCEDER</a>
                            </li>
                        <li class="nav-item">
                          <a class="nav-link"       id="DASCE1" href="#DASCE">DASCE</a>
                        </li>
                        
                        <li class="nav-item">
                                <a class="nav-link" id="REDDASCE1"  href="#REDDASCE">REDDASCE</a>
                        </li>
                    
                        <li class="nav-item">
                                <a class="nav-link" id="AYUDAD1" href="#AYUDA">AYUDA</a>
                        </li>
                       
                    </div>
                </div> 
                  </nav>
                </header>   
                <div id="casilisto">
</div>
<?php 
if ($fracaso== 1) {
    echo '<div  id="cerar"
    class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
    <div class="maguia-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--error">
      <div class="maguia-icon--error__x-mark">
        <span class="swal-icon--error__line swal-icon--error__line--left"></span>
        <span class="swal-icon--error__line swal-icon--error__line--right"></span>
      </div>
          </div><div class="maguia-title" >Fracaso</div><div class="maguia-text" >Si se equivoca mas de 4 veces en un periodo de 6 minutos su usuario se bloqueara automaticamente</div><div class="maguia-footer"><div class="maguia-button-container">
      
          <button class="maguia-button maguia-button--confirm" id="listos">OK</button>
      
          <div class="maguia-button__loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
      
        </div></div></div></div>';
};
?>
   <section  id="LOGIN">
   <div id="msjpros" style="display: none;
      opacity: 0;"  class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
          <div class="maguia-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
            <span class="swal-icon--success__line swal-icon--success__line--long"></span>
            <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
        
            <div class="swal-icon--success__ring"></div>
            <div class="swal-icon--success__hide-corners"></div>
            </div><div class="maguia-title" >Disponible</div><div class="maguia-text" >Enhorabuena ya puede iniciar sesión.</div><div class="maguia-footer"><div class="maguia-button-container">
        
            <button class="maguia-button maguia-button--confirm" id="listos">OK</button>
        
            <div class="maguia-button__loader">
              <div></div>
              <div></div>
              <div></div>
            </div>
        
          </div></div></div></div>
    <div class="container" id="sera">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form forlog" id="for-entrar">
            <h2 class="title">Ingresa Ya!</h2>
            <div class="input-field">
              <i class="icon icon-user"></i>
              <input type="text" placeholder="Usuario" class="estoes" name="usuarioE"/>
            </div>
            <div class="input-field">
              <i class="icon icon-lock"></i>
              <input type="password" placeholder="Contraseña" class="estoes" name="ssap"/>
            </div>
            <input type="button" value="Entrar" id="Entrar" class="btn solid" />
              <a href="#" id="Restableser">Reestablecer Datos</a>  
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
          <form class="sign-up-form forlog" id="form_nuevo_user">
            <h2 class="title">Nuevo</h2>
            <div class="input-field">
              <i class="icon icon-mortar-board"></i>
              <select name="Tipo" id="Tipouser">
                <option value="Estudiante">Estudiante</option>
                <option value="Analista">Analista</option>
              </select>
            </div>
            <div class="input-field">
              <i class="icon icon-user"></i>
              <input type="text" placeholder="Usuario" class="estoes" name="usuarioR" id="usuario1"/>
              <div id="mensaje_user"></div>
              <input type="hidden" name="usuario1_conf" id="usuario1_conf" />
            </div>
            
            <div class="input-field">
              <i class="icon icon-lock"></i>
              <input type="password" placeholder="Contraseña" class="estoes" name="ssap1" id="pass1"/>
            
            </div>
           
            <div class="input-field">
              <i class="icon icon-lock"></i>
              <input type="password" placeholder="Repita la Contraseña" class="ssap2" name="ssap2" id="pass2"/>
              <input type="hidden" name="pass_conf" id="pass_conf" />
            </div>

            <input type="button" class="btn" value="Guardar" id="guardar" />
            <div id="ms_nuevo_user"></div>
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

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>REDDASCE</h3>
            <p>
              No le tema al cambio,</br>
              Aproveche su tiempo,</br>
              Asegure su información  y
              No tenga contratiempos.  
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarse 
            </button>
          </div>
          
          <img src="../../static/Img/2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Que Ganas?</h3>
            <p>
              Fácil  manejo de información </br>
              Minimiza el tiempo de trabajo</br>
              Información rápida</br>
              entre muchas cosas que le facilitaran el día.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Ingresar
            </button>
          </div>
          
          <img src="../../static/Img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>


    <section id="DASCE" class="">
      
      
        <div class="dasce-grid">

          <div class="dasce-heder">
              <div class="inputs">
                    <input type="button" value="Ubicación"   id="opc1">
                    <input type="button" value="Misión"      id="opc2">
                    <input type="button" value="Visión"      id="opc3">
                    <input type="button" value="Historia"    id="opc3">
              </div>
                <center><h2>Historia</h2></center>
                
          </div>

          <div class="dasce-opc">

            <div class="ing">
              <img src="../../static/Img/Reddace.png" alt="">
          </div>

            <div><h2>DASCE</h2></div>

            <p>Departamento de control de estudiantes</p>

          <strong> 01/08/2020</strong>
           
          </div>


         <div class="dasce-des">
           
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quas vel minima nihil. Illo consequuntur quae quisquam sequi molestias, pariatur nostrum deserunt praesentium ratione! Reprehenderit saepe a accusantium dolor velit.Placeat architecto natus illum asperiores sint officia, molestias velit accusamus esse voluptates eveniet, numquam minus vel quasi corporis optio laboriosam eum quaerat, eius at voluptatum mollitia dolorum? Qui, nihil atque!</p>
          
          </div>

          <div class="dasce-img">
        
       
           </div>

           <div class="dasce-pis">
            <p>Información obtenida entre los años &ensp;2020/2021.</p> 
           </div>
        </div>
     
    </section>
              
  
    


    <section class="no-movil contentBox height100p" id="REDDASCE">

        <div class="contentBox  h100">
            <div class="contentBox  h100"  id="Home">
              <div class="ventajas-deventajas">
                          <div class="vd-1">
                              <h1 > RED-DASCE  </h1>
                          </div>
                          <div class="vd-2">
                            <p>Ventajas</p>
                            <ul>
                              <li>
                                * Informacion Rapida
                              </li>
                              <li>
                               * Comunicación Directa
                              </li>
                              <li>
                               * Notas Al Instante
                              </li>
                              <li>
                               * Solisitudes sin Demora
                              </li>
                              <li>
                               * Montar y ver sus Clases
                              </li>
                              <li>
                               * Ver Profesores Asignados 
                              </li>
                              <li>
                               * Proceso de Inscripciones 
                              </li>
                            </ul>
                          </div>
                    <div class="vd-3">
                      <img src="../../static/Img/Reddace.svg" alt="">
                    </div>
                         
                    <div class="vd-4">
                      <p>¿Creado por?</p>
                      <div class="creado-por">
                      <p class="contnido-tex">Las comunidades que no cuentan con un 
                        Sistema de información automatizado, 
                        sean grandes o pequeñas sufren
                        múltiples problemáticas
                        como pueden ser
                        perdida de información 
                        redundancia de datos
                        exceso de gasto de material ofimático,
                        problema de ambiente personal,
                        problemas legales
                        y / O control de todos sus procesos internos 
                        o externos </p> 
                      
                    </div>
                    </div>
              </div>
            </div>
        </div>
      
   
            <div class="container-2">
                <h1 class="heading card1"> Desarrolladores </h1>
                    <div class="card-wrapper card2">
                        <div class="my-card  Dany ">
                                <img src="../../static/Img/my_tex.png" alt="card background" class="my-card-img">
                                <img src="../../static/Img/defect.jpg"     alt="profile img" class="profile-img">
                                <h1>Dany Tapias</h1>
                            
                                <p class="about">Analista</p>
                                <p class="about">Diseñador UI</p>
                            <div id="posision">
                                <li><a href="http://"><i class="icon icon-facebook-square"></i> </a></li>

                            </div>
                        </div>
                        <div class="my-card  oscar">
                          <img src="../../static/Img/my_tex.png" alt="card background" class="my-card-img">
                          <img src="../../static/Img/oscar.jpg"     alt="profile img" class="profile-img">
                          <h1>Oscar Delgado</h1>
                          <p class="about">Lider</p>
                          <p class="about">Programador</p>
                          
                      <div id="posision">
                          <li><a href="http://"><i class="icon icon-facebook-square" ></i> </a></li>

                          </div>
                       </div>
                        <div class="my-card  Jean ">
                          <img src="../../static/Img/my_tex.png" alt="card background" class="my-card-img">
                          <img src="../../static/Img/jean.jpg"     alt="profile img" class="profile-img">
                          <h1>Jean Carlos Jaramillo</h1>
                          <p class="about">Depurador</p>
                          <p class="about">Diseñador BDD</p>
                          
                      <div id="posision">
                          <li><a href="http://"><i class="icon icon-facebook-square" ></i> </a></li>

                      </div>
                      </div>
                      
                    </div>
                    <div class="card-wrapper card3">
                        <div class="my-card  Dany ">
                                <img src="../../static/Img/my_tex.png" alt="card background" class="my-card-img">
                                <img src="../../static/Img/defect.jpg"     alt="profile img" class="profile-img">
                                <h1>Jesus Brito</h1>
                                <p class="about">Analista</p>
                                
                            <div id="posision">
                                <li><a href="http://"><i class="icon icon-facebook-square"></i> </a></li>

                            </div>
                        </div>
                       
                        <div class="my-card  oscar">
                            <img src="../../static/Img/my_tex.png" alt="card background" class="my-card-img">
                            <img src="../../static/Img/daymar.jpg"     alt="profile img" class="profile-img">
                            <h1>Daymar Bolivar</h1>
                            <p class="about">Analista</p>
                        <div id="posision">
                            <li><a href="http://"><i class="icon icon-facebook-square" ></i> </a></li>

                            </div>
                        </div>
                         <div class="my-card  Jean ">
                          <img src="../../static/Img/my_tex.png" alt="card background" class="my-card-img">
                          <img src="../../static/Img/defect.jpg"     alt="profile img" class="profile-img">
                          <h1>Javier Guevara</h1>
                          <p class="about">Analista</p>
                          
                      <div id="posision">
                          <li><a href="http://"><i class="icon icon-facebook-square" ></i> </a></li>

                      </div>
                        </div>
                  </div>
            </div>



    </section>
         
    <section class="contact" id="AYUDA">

      <div class="container-fluid ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headerText text-center">
                                <h2>Contactenos</h2>
                                <p>Para Mayor Información</p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="offset-sm-2 col-sm-8">
                    <form action="" method="" class="forlog">
                            <div class="form-group">
                                 <label for="Nombre">Nombre</label>
                                 <input title="coloque su nombre" type="text" name="Nombre" class="form-control" onkeypress="return soloLetras(event)">
                            </div>
    
                            <div class="form-group">
                                  <label for="Correo">Correo</label>
                                  <input title="ejp=Anmahel@gmail.com" type="email" name="Correo" class="form-control">
                            </div>
    
                            <div class="form-group">
                                 <label for="Celular">Numero Celular</label>
                                 <input title="Ejp = 0412-000-00-00" type="text" name="Celular" class="form-control" onkeypress="return soloNumeros(event)">
                            </div>
    
                            <div class="form-group">
                                 <label for="Mensaje">Mensaje</label>
                                 <textarea class="form-control textarea" name="Mensaje" id="Mensaje"></textarea>
                            </div>
                            <div class="form-group text-center">
                                   <!-- <button class="btn btnD1"> Enviar</button> -->
                                   <a href="menu/menu.php" class="btn btnD1">Enviar</a> 
                            </div>
                    </form>
                    <p class="cpryt">
                      &copy; Copyright 2020/2021 REDDASCE |  Template by Equipo Investigador ATM-I.  
                   </p>
                </div>
            </div>
        </div>
 
    </section>
   
 
 </body>
 

    </html>
    <script src="../../static/Js/jquery-3.4.1.min.js"></script>
    <script src="../../static/Js/popper.min.js"></script>
 
    <script src="../../static/Js/login/app.js"></script>
    <script src="../../static/Js/bootstrap.min.js"></script>
    <script src="../../static/Js/Letra-o-Numero.js"></script>
    <script src="../../static/Js/Encriptar/encriptar.js"></script>
    <script src="../../static/Js/Encriptar/desincriptar.js"></script> 
    
    <script src="../../static/Js/sweetalert.min.js"></script>
    <!-- efecto de la bara de navegacion  -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#DASCE1').click(function(){
            $("#DASCE1").removeClass('invis');
            $("#REDDASCE1").removeClass('active');
            $("#ENTRAR1").removeClass('active');
            $("#AYUDAD1").removeClass('active')
            $("#DASCE1").addClass('active');
        });

        $('#REDDASCE1').click(function(){
            $("#DASCE1").removeClass('active');
            $("#REDDASCE1").removeClass('invis');
            $("#ENTRAR1").removeClass('active');
            $("#AYUDAD1").removeClass('active')
            $("#REDDASCE1").addClass('active');
        });
        $('#ENTRAR1').click(function(){
            $("#DASCE1").removeClass('active');
            $("#REDDASCE1").removeClass('active');
            $("#ENTRAR1").removeClass('invis');
            $("#AYUDAD1").removeClass('active')
            $("#ENTRAR1").addClass('active');
        });
        $('#AYUDAD1').click(function(){
            $("#DASCE1").removeClass('active');
            $("#REDDASCE1").removeClass('active');
            $("#ENTRAR1").removeClass('active');
            $("#AYUDAD1").removeClass('invis')
            $("#AYUDAD1").addClass('active');
        });
 
    });
</script>
<!--fin  efecto de la bara de navegacion  -->
 
   <!-- efecto del scrolled  -->
   <script> 
    $(document).scroll(function(){
        $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    });
</script>
<!--fin efecto del scrolled  -->

 
 
 <!-- para entrar en el sistema  -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#Entrar').click(function(){ 
            var datos=$('#for-entrar').serialize();
            // console.log(datos);
                       
			$.ajax({    
				type:"POST",
				url:"usuarios/validar-usuario.php", //listo ya datos esta Eliminado
				data:datos, 
				success:function(res1){
					$('#mensajes').html(res1);  
          //  console.log(res1);
				}
			});

			return false;
		});
    });
</script>
<!-- fin para entrar en el sistema  -->
 
 
 
 
 
 <!-- amimacion para Restableser los dados de un usuario  -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#Restableser').click(function(){
            var datos=$('#for-entrar').serialize();
            $('#LOGIN').css('display' ,'none');
           
            $.ajax({   
				type:"POST",
				url:"usuarios/confirmar-seccion.php",
				data:datos,
				success:function(res1){
                    // console.log(res1);
                      
                    $('#casilisto').load("usuarios/confirmar-seccion.php");
				}
			});

			return false;
            // $('#casilisto').load("../Debug/usuarios/confirmar-seccion.php");
		});
    });
</script>
<!-- fin amimacion para Restableser los dados de un usuario  -->
 
 
 
<!-- inicio comparando el usuario  -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#usuario1').focusout(function(){
      var usua0=document.getElementById('usuario1').value;   
      // alert(usua1);

      var usua1=usua0;

            if (usua1.length >= 4 ) { 
          
                          $.ajax({  
                            type:"POST", 
                            url:"usuarios/validar-new-user.php", /*listo */
                            data:usua0,
                            // data:'desde='+desde+'&hasta='+hasta, 
                            data:'usuario='+usua0,
                            success:function(res1){
                             if (res1 == 0)
                             {
                                $('#ms_nuevo_user').html("<p class='exito1'>Usuario Disponible!</p>");
                                $('#usuario1_conf').val('1');
                               
                                return false;
                             };
                             if (res1 == 1)
                             {
                                $('#ms_nuevo_user').html("<p class='fracaso_login'>Usuario No Disponible!</p>");
                                $('#usuario1_conf').val('0');
                                return false;
                             }
                            // console.log(res1);
                            } 
                          });
                  return false;
      };
   
			return false;
		});
    });
		
</script>
<!-- fin comparando el usuario -->
 <!-- inicio comprobandon contraseñas -->
 <script>
$(document).ready(function(){
        $('#pass2').keyup(function(){
          var pass1=document.getElementById('pass1').value;
          var pass2=document.getElementById('pass2').value;
          if(pass1=='' && pass2==''){
            return false;
          };
            if (pass1 != pass2) {
              $('#ms_nuevo_user').html("<p class='fracaso_login'>Las Contraseñas No Coinciden!</p>");
              $('#pass_conf').val('0');
              return false;
            }else{
              $('#ms_nuevo_user').html("<p class='exito1'>Las Contraseñas Coinciden</p>");
              $('#pass_conf').val('1');
              return false;
            }
        });
			return false;
});

 </script>
 <!-- fin comprobandon contraseñas -->
 <!-- inicio para el nuevo registro  -->
 <script type="text/javascript">
	$(document).ready(function(){
		$('#guardar').click(function(){
      var datos=$('#form_nuevo_user').serializeArray();    
      var usuario1_conf=document.getElementById('usuario1_conf').value;   
      var pass_conf=document.getElementById('pass_conf').value; 
      var pass=datos[4].value;  
      var usua=datos[1].value;
      // console.log(usua, pass);
            if (usua == '' || usua == null) 
            {
              $('#ms_nuevo_user').html("<p class='fracaso_login'>Coloque El Usuario!</p>");
              return false;
            };
            if (usua.length < 4) 
            {
             
               $('#ms_nuevo_user').html("<p class='fracaso_login'>Su usuario debe de ser Mayor a 3 y Menor a 17 Caracteres</p>");
              return false;
            };
            if (usua.length >= 4  && usuario1_conf ==0) 
            {
              $('#ms_nuevo_user').html("<p class='fracaso_login'>Usuario No Disponible</p>");
             return false;

            };
            if (pass.length <=4 || pass.length >= 10 ) 
            {
              $('#ms_nuevo_user').html("<p class='fracaso_login'>Su Contraseña debe de ser Mayor a 4 y Menor a 10 Caracteres</p>");
              return false;
            };
            if (pass_conf ==0 ) 
            {
              $('#ms_nuevo_user').html("<p class='fracaso_login'>Su Contraseña No Coincide!</p>");
              return false;
            };
            if (pass_conf == 1 && usuario1_conf == 1) 
            {
              var codigo = new encriptado();
              var oscar = codigo.comoEncriptar(datos[4].value);
              datos[4].value = oscar;
              // console.log(datos[4].value);
            $.ajax({  
                    type:"POST",
                    url:"usuarios/nuevo-usuario.php", 
                    data:datos,  
                    success:function(res1)
                    {
                      // console.log(res1);
                      if (res1 == 1) {
                        $('#msjpros').removeAttr('style');
                        $('#guardar').css('display', 'none');;
                         
                        return false;
                      };
                      if (res1 == 0) {
                        swal ( "ERROR" ,  "Ocurrio Un Error" ,  "error" );
                        return false;
                      };
                    } 
                 });
			return false;
            }
              
		});
    });
		
</script>
<!-- MSJ moda -->
<script language='javascript'> 
$(document).ready(function(){
  $('#listos').click(function(){
         $('#msjpros').css('display' ,'none' ,'opacity', '0');
         $('#cerar').css('display' ,'none' ,'opacity', '0');
        // location.href='../../index.php';
         
      });
});
</script>; 
 <!-- fin para el nuevo registro  -->

<!-- inicio envio de datos para nuevo usuario -->
<!-- primero tubo que pasar por los proceso de validacion -->

<!-- fin envio de datos para nuevo usuario  -->

<!-- elemento {
    display: grid;
    grid-template-rows: 90vh 10vh;
    grid-template-columns: 1fr;
    grid-template-areas: "carra" "pies";
} -->