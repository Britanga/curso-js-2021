<?php
session_start();
    include ('../perfil/perfil.php');
?>
<!DOCTYPE html>
<html lang="es">
<head> 
       
            <?php
             include ('../archive/css.php');
            ?>
<!-- inicio para kien -->
<?php
             include ('../archive/Para_El_Perfil.php');
            ?> 
<!-- fin para kien -->
                <!-- CSS PROPIOS-->

                <link rel="stylesheet" href="../../../static/Css/planificasion.css">

</head>

<body>
    <!-- inicio  MSJ emerjentes para el estudiante-->
    <?php

include ('../archive/precarga1.html');

?>
<!-- fin MSJ emerjentes para el estudiante -->
   <div class="cont1">

  <!-- inicio el heder -->
            <?php
             include ('../archive/caveza.php');
            ?>
<!-- finel heder -->

<!-- inicio opc del menu -->
            <?php
             include ('../archive/menu.php');
            ?>
<!-- fin opc del menu -->


<!-- contenido form(o otras cosas) -->
<main class="contenido">
   <div id="texturas">
   <div class="mapa" >
      <nav aria-label="breadcrumb"  >
          <ol class="breadcrumb radius-1rem2r " style="margin-bottom:2px; padding-bottom: 9px">
                <li class="breadcrumb-item active text-center" aria-current="page"> 
                   <i class="icon icon-home"></i> 
                   <a class="otrass" href="../menu/menu.php">Inicio</a>
               </li>
               <li class="breadcrumb-item active text-center" aria-current="page"> 
                   <i class="icon icon-home"></i> 
                   <a class="colorr" href="creadas.php">Clases Creadas</a>
               </li>
          </ol>
      </nav>
  </div> 
  </div> 
  
  

  <form id="solicitudparte2" method="" name="formActividad" class="elcontenido" style="width: 100%;">
         <!-- datos iguales -->
         <div class="CLAVparte1">
            
               <div class="inp1">
                  <center>  <b>Tipo*</b></center>
                  
                     <div>
                        <select class="robo" name="selec1t" id="PoP" required style="min-width: 130px;">
                              <option value="">Opciones</option>
                              <option value="Intencivo">Intensivo</option>
                              <option value="Repitencia">Repitencia</option>
                              <option value="Inscripcion">Inscripción</option>
                        </select>
                     </div>
                     </div>
                     <div class="inp2">
                        <center>  <b>Carrera *</b></center>
                        
                           <div>
                              <select class="robo" name="selec1t" id="" required>
                                 <option value="">Opciones</option>
                                 <option value="Informatica">Informatica</option>
                                 <option value="Eletricidad">Eletricidad</option>
                              </select>
                           </div>
                           </div>
                           <div class="inp3">
                                    <center>  <b>Trayecto *</b></center>
                                    
                                       <div>
                                          <select class="robo" name="selec1t" id="" required>
                                             <option value="">Opciones</option>
                                             <option value="Ts">Trayecto Inicial</option>
                                             <option value="T1">Trayecto 1</option>
                                             <option value="T2">Trayecto 2</option>
                                             <option value="T3">Trayecto 3</option>
                                             <option value="T4">Trayecto 4</option>  
                                          </select>
                                       </div>
                                       </div>
                           <!-- Formulario su clase de orientacion es inp4 -->
                           <div class="eliminar12" id="inp4parte1">
                              <center>  <b>Materia *</b></center>
                              
                                 <div>
                                    <select class="robo" name="selec1t" id="" required>
                                       <option value="">Opciones</option>
                                       <option value="Matematica1">Matematica 1</option>
                                       <option value="Matematica2">Matematica 2</option>
                                       <option value="Programacion1">Programacion 1</option>
                                       <option value="Programacion2">Programacion 2</option>
                                       <option value="PHP">PHP</option>
                                    </select>
                                 </div>
                           </div>
                          <!-- Formulario su clase de orientacion es inp4 -->
                           <div class="eliminar12" id="inp4parte2">
                                   <center>  <b>Metodo *</b></center>
                              
                                 <div>
                                    <select class="robo" name="selec1211" id="inp4Metodo" required>
                                       <option value="">Opciones</option>
                                       <option value="Crear">Crear</option>
                                       <option value="Agregar">Agregar</option>
                                    </select>
                                 </div>
                           </div>
         </div>
         <!-- Formulario su clase de orientacion es CLAVparte2 -->
         <div class="eliminar12 intencivoClass" id="intenparte1">
         
               <fieldset class="parre" id="a1"> 
                  <div class="actic" > <h3>Datos</h3></div>
                  <div class="conte" >
                     
                           <div class="conte1_1">
                                    <div class="grupo1">
                                       <center>  <b>C/Cupos *</b></center><!-- con el typi puedo espesificar mejor-->
                                       
                                          <div>
                                          <input type="number" name="CanDeEstu" id="" placeholder="Estudiantes" required min="1" max="40">
                                          </div>
                                    </div>
                                    <div class="grupo2">
                                       <center>  <b>C/Materia *</b></center><!-- con el typi puedo espesificar mejor-->
                                       
                                          <div>
                                          <input type="number" name="CanDeMateria" id="" value="1" required min="1" max="1" disabled style="color: #000;">
                                          </div>
                                    </div>
                           </div>
                  
                           <div class="conte1_2">
                                 <div class="grupo1">
                                    <center>  <b>Sección *</b></center><!-- con el typi puedo espesificar mejor-->
                                    
                                       <div>
                                       <input class="robo" type="number" name="seccion23" id="" placeholder="Sección" required min="1" max="20">
                                       </div>
                                 </div>
                                 <div class="grupo3">
                                    <center>  <b>Turno *</b></center><!-- con el typi puedo espesificar mejor-->
                                    
                                       <div>
                                       <select class="robo" name="Turno" id="" required>
                                             <option value="">Opciones</option>
                                             <option value="Diurno">Diurno</option>
                                             <option value="Nonturno">Nocturno</option>
                                             <option value="Ambos">Ambos</option>
                                       </select>
                                       </div>
                                 </div>
                           </div>
                  
                           <div class="conte1_3"> 
                                 <div class="grupo1">
                                    <center>  <b>Inicia *</b></center><!-- con el typi puedo espesificar mejor-->
                                       <div>
                                    <input type="date" class="robo" name="Fec_ini" id="">
                                       </div>
                                 </div>
                                 <div class="grupo2 " id="otraForma1">
                                       <center>  <b>Culmina *</b></center><!-- con el typi puedo espesificar mejor-->
                                          <div>
                                          <input type="date" class="robo" name="Fec_Cul" id="">
                                          </div>
                              </div>
                           </div>
                     
                  </div>
               </fieldset> 
            

            
         </div>  
         <!--Estudiantes su clase de orientacion es CLAVparte3 -->
         <div class="eliminar12 intencivoClass" id="intenparte2">
         

            <div class="scrol" >
               <table cellpadding="10" > 
                  <thead>
                  <tr>
                  <th>T?-F? </th>
                  <th>Materia</th>
                  <th>Solicitudes</th>
                  </tr>
                  </thead>

                  <tbody id="comunicasion4" class="" >

               
                  </tbody>
               </table>
            
            </div>

               <div class="botones2">
              
                  <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar">
                     <span>Guardar</span>
                  </button>
               </div>

         </div>


         
         <div class="eliminar12 InscripciónClass" id="inscriparte1">
         
               <fieldset class="parre" id="a1"> 
                  <div class="actic" > <h3>Datos</h3></div>
                  <div class="conte" >
                     
                           <div class="conte1_1">
                                    <div class="grupo1">
                                       <center>  <b>C/Cupos *</b></center><!-- con el typi puedo espesificar mejor-->
                                       
                                          <div>
                                          <input type="number" name="CanDeEstu" id="" placeholder="Estudiantes" required min="1" max="40">
                                          </div>
                                    </div>
                                    <div class="grupo2">
                                       <center>  <b>C/Materia *</b></center><!-- con el typi puedo espesificar mejor-->
                                       
                                          <div>
                                          <input type="number" name="CanDeMateria" id=""  required min="1" max="25" style="color: #000;">
                                          </div>
                                    </div>
                           </div>
                  
                           <div class="conte1_2">
                                 <div class="grupo3">
                                    <center>  <b>Fase *</b></center><!-- con el typi puedo espesificar mejor-->
                                       <div>
                                       <select class="robo" name="fase" id="" required>
                                             <option value="">Opciones</option>
                                             <option value="F1">F1</option>
                                             <option value="F2">F2</option>
                                             <option value="Completo">Completo</option>
                                       </select>
                                       </div>
                                 </div>

                                 <div class="grupo1">
                                    <center>  <b>Sección *</b></center><!-- con el typi puedo espesificar mejor-->
                                    
                                       <div>
                                       <input class="robo" type="number" name="seccion23" id="" placeholder="Sección" required min="1" max="20">
                                       </div>
                                 </div>
                             
                           </div>
                  
                 
                           <div class="conte1_3">   
                              <div class="grupo2 " id="otraForma1">
                                       <center>  <b>Matricula *</b></center><!-- con el typi puedo espesificar mejor-->
                                          <div>
                                          <input type="text" class="robo" name="matricula" id="">
                                          </div>
                              </div>

                                 <div class="grupo3">
                                          <center>  <b>Turno *</b></center><!-- con el typi puedo espesificar mejor-->
                                          
                                             <div>
                                             <select class="robo" name="Turno" id="" required>
                                                   <option value="">Opciones</option>
                                                   <option value="Diurno">Diurno</option>
                                                   <option value="Nonturno">Nocturno</option>
                                                   <option value="Ambos">Ambos</option>
                                             </select>
                                             </div>
                                 </div>
                           </div>

                           <div class="conte1_4"> 
                                 <div class="grupo1">
                                    <center>  <b>Inicia *</b></center><!-- con el typi puedo espesificar mejor-->
                                       <div>
                                    <input type="date" class="robo" name="Fec_ini" id="">
                                       </div>
                                 </div>
                                 <div class="grupo2 " id="otraForma1">
                                       <center>  <b>Culmina *</b></center><!-- con el typi puedo espesificar mejor-->
                                          <div>
                                          <input type="date" class="robo" name="Fec_Cul" id="">
                                          </div>
                              </div>
                           </div>
                  </div>
               </fieldset> 
            

            
         </div>  
        
         <div class="eliminar12 InscripciónClass" id="inscriparte2">
         

            <div class="scrol" >
               <table cellpadding="10" > 
                  <thead>
                  <tr>
                  <th>T?-F? </th>
                  <th>Matricula</th>
                  <th>Solicitudes</th>
                  </tr>
                  </thead>

                  <tbody id="comunicasion4" class="" >

               
                  </tbody>
               </table>
            
            </div>

               <div class="botones2">
              
                  <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar">
                     <span>Guardar</span>
                  </button>
               </div>

         </div>



        
         <div class="eliminar12 repitenciaClass" id="repiparte1">
         
               <fieldset class="parre efectoRaro" id="a1"> 
                  <div class="actic" > <h3>Datos</h3></div>
                  
                  <!--Estudiantes su clase de orientacion es conte -->
                  <div class="eliminar12" id="crearRepitencia">
                     
                           <div class="conte1_1">
                                    <div class="grupo3">
                                    <center>  <b>Fase *</b></center><!-- con el typi puedo espesificar mejor-->
                                       <div>
                                       <select class="robo" name="fase" id="" required>
                                             <option value="">Opciones</option>
                                             <option value="F1">F1</option>
                                             <option value="F2">F2</option>
                                             <option value="Completo">Completo</option>
                                       </select>
                                       </div>
                                 </div>
                                 <div class="grupo1">
                                       <center>  <b>C/Cupos *</b></center><!-- con el typi puedo espesificar mejor-->
                                       
                                          <div>
                                          <input type="number" name="CanDeEstu" id="" placeholder="Estudiantes" required min="1" max="40">
                                          </div>
                                    </div>
                           </div>
                  
                           <div class="conte1_2">
                         
                                 <div class="grupo3">
                                       <center>  <b>Materia *</b></center><!-- con el typi puedo espesificar mejor-->
                                       
                                          <div>
                                          <select class="robo" name="selec1t" id="" required>
                                             <option value="">Opciones</option>
                                             <option value="Matematica1">Matematica 1</option>
                                             <option value="Matematica2">Matematica 2</option>
                                             <option value="Programacion1">Programacion 1</option>
                                             <option value="Programacion2">Programacion 2</option>
                                             <option value="PHP">PHP</option>
                                          </select>
                                          </div>
                                    </div>
                                 <div class="grupo1">
                                    <center>  <b>Sección *</b></center><!-- con el typi puedo espesificar mejor-->
                                    
                                       <div>
                                       <input class="robo" type="number" name="seccion23" id="" placeholder="Sección" required min="1" max="20">
                                       </div>
                                 </div>
                             
                           </div>
                  
                 
                           <div class="conte1_3">   
                              <div class="grupo2 " id="otraForma1">
                                       <center>  <b>Matricula *</b></center><!-- con el typi puedo espesificar mejor-->
                                          <div>
                                          <input type="text" class="robo" value="no es necesario" name="matricula" id="" disabled>
                                          </div>
                              </div>

                                 <div class="grupo3">
                                          <center>  <b>Turno *</b></center><!-- con el typi puedo espesificar mejor-->
                                          
                                             <div>
                                             <select class="robo" name="Turno" id="" required>
                                                   <option value="">Opciones</option>
                                                   <option value="Diurno">Diurno</option>
                                                   <option value="Nonturno">Nocturno</option>
                                                   <option value="Ambos">Ambos</option>
                                             </select>
                                             </div>
                                 </div>
                           </div>

                           <div class="conte1_4"> 
                                 <div class="grupo1">
                                    <center>  <b>Inicia *</b></center><!-- con el typi puedo espesificar mejor-->
                                       <div>
                                    <input type="date" class="robo" name="Fec_ini" id="">
                                       </div>
                                 </div>
                                 <div class="grupo2 " id="otraForma1">
                                       <center>  <b>Culmina *</b></center><!-- con el typi puedo espesificar mejor-->
                                          <div>
                                          <input type="date" class="robo" name="Fec_Cul" id="">
                                          </div>
                              </div>
                           </div>
                  </div>
                  <!--Estudiantes su clase de orientacion es conte -->
                  <div class="eliminar12" id="addRepitencia">
                     
                     <div class="conte1_11">
                             <div class="grupo3">
                              <center>  <b>Fase *</b></center><!-- con el typi puedo espesificar mejor-->
                                 <div>
                                 <select class="robo" name="fase" id="" required>
                                       <option value="">Opciones</option>
                                       <option value="F1">F1</option>
                                       <option value="F2">F2</option>
                                       <option value="Completo">Completo</option>
                                 </select>
                                 </div>
                           </div>
                              <div class="grupo3">
                                 <center>  <b>Materia *</b></center><!-- con el typi puedo espesificar mejor-->
                                 
                                    <div>
                                    <select class="robo" name="selec1t" id="" required>
                                             <option value="">Opciones</option>
                                             <option value="Matematica1">Matematica 1</option>
                                             <option value="Matematica2">Matematica 2</option>
                                             <option value="Programacion1">Programacion 1</option>
                                             <option value="Programacion2">Programacion 2</option>
                                             <option value="PHP">PHP</option>
                                          </select>
                                    </div>
                              </div>
                     </div>

                     <div class="conte1_22"> 
                            <div class="vinculosrepi"><h3>Vincular</h3></div>
                     </div>

                     <div class="conte1_33">
                  <div class="pared_scrol">
                           <div class="uncoter">
                              <div class="escala">  
                              <center>  <b>Sección 1</b></center>
                                 <input type="text" value="Estudiantes Inscritos: 20" disabled >
                                 <input type="number" placeholder="Cuantos Quiere Agregar?">
                              </div>
                              <div class="escala">  
                              <center>  <b>Sección 2</b></center>
                                 <input type="text" value="Estudiantes Inscritos: 20" disabled >
                                 <input type="number" placeholder="Cuantos Quiere Agregar?">
                              </div>
                              <div class="escala">  
                              <center>  <b>Sección 3</b></center>
                                 <input type="text" value="Estudiantes Inscritos: 20" disabled >
                                 <input type="number" placeholder="Cuantos Quiere Agregar?">
                              </div>
                              <div class="escala">  
                              <center>  <b>Sección 4</b></center>
                                 <input type="text" value="Estudiantes Inscritos: 20" disabled >
                                 <input type="number" placeholder="Cuantos Quiere Agregar?">
                              </div>
                           </div>

                  
                  </div>
                     
                     </div>
                  </div>

               </fieldset> 
            

            
         </div>  
        
         <div class="eliminar12 repitenciaClass" id="repiparte2">
      
                  <div class="scrol" id="" >
                        <div class="" id="parr1">
                           <table cellpadding="10" > 
                              <thead>
                              <tr>
                              <th>T?-F? </th>
                              <th>Estudiente</th>
                              <th>Materia</th>
                              </tr>
                              </thead>

                              <tbody id="comunicasion4" class="" >

                           
                              </tbody>
                           </table>
                        </div>


                  </div>

               <div class="botones2">
              
                  <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar">
                     <span>Guardar</span>
                  </button>
               </div>

         </div>
         
 
</form> 
  <!-- fin de la informacion -->
</div>
   </main>
<!-- inicio del pies -->
            <?php
             include ('../archive/pies.php');
            ?>
<!-- fin del pies -->

</div>
</body>
 
    </html>

<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->
<script src="../../../static/Js/tipoRecuperacion.js"></script>