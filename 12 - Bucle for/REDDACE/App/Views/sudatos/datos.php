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
    
    <link rel="stylesheet" href="../../../static/Css/susdatos.css"> 
</head>

<body>
<?php

   include ('../archive/precarga1.html');

?>
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
<style>

</style>
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
                            <a class="colorr" href="#"> Sus Datos </a>
                        </li>
                    </ol>
                </nav>
            </div> 
    </div> 
    
     <div class="elcontenido Pintar1 ">
  <!-- es este espacio va la informacion -->

  <div class="CLAVparte1">
   <h3> Sus Datos </h3>
</div>
   <!-- buscador -->
<div class="CLAVparte2">
   <div class="parre">

     <div id="Trayecto1" class="col-lg-3 parteT1-CLA" >
                  <!-- small box -->
             <div class="small-box btn-primary" id="Trayecto1-1">
                <div class="inner">
                    <p>Datos</p>
                </div>
                <div class="icon">
                    <i class="icon-news"></i>
                </div>
            </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto2" class="col-lg-3 parteT2-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto2-2">
           <div class="inner">
             <p>Dirección</p>
           </div>
           <div class="icon">
             <i class="icon-road"></i>
           </div>
         </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto3" class="col-lg-3 parteT3-CLA">
           <!-- small box -->
           <div class="small-box btn-primary" id="Trayecto3-3">
             <div class="inner">
               <p>Contraseña</p>
             </div>
             <div class="icon">
               <i class="icon-lock2"></i>
             </div>
            </div>
         </div>
 
     <!-- ./col -->
     <div id="Trayecto4" class="col-lg-3 parteT4-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-4">
           <div class="inner">
             <p>Preguntas</p>
           </div>
           <div class="icon">
             <i class="icon-key"></i>
           </div>
         </div>
       </div>
       <!-- ./col -->
     <!-- ./col -->
     <div id="Trayecto5" class="col-lg-3 parteT5-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-5">
           <div class="inner">
             <p>Comunicación</p>
           </div>
           <div class="icon">
             <i class="icon-comments"></i>
           </div>
         </div>
       </div>
   </div> 

</div>  


<!-- semi-tabla -->
<div class="CLAVparte3">
 <!-- T1 -->
        <div id="comunicasion1">
        </div>
        <!-- T2 -->

   
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
<input type="hidden" name="Cedula" value="<?php echo $LCI ?>" id="como">
<input type="hidden" name="Usuario" value="<?php echo$LUser?>" id="como1">
<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->

<?php
    include ('../archive/jq_SL.php');
?>  
  
 
  <!-- JC propios  scrol-->

  <script src="../../../static/js/susdatos.js"></script>  
  <script src="../../../static/Js/clases.js"></script>
  <script src="../../../static/Js/envio.js"></script>
  <script>

class encriptado{
    constructor(){
        this.dimension = [];
        this.rando = [];
        this.encriptado = [];
        this.error = ["undefined","InfinityoInfinity"];
        this.mnsj = ["La contrasella deve de ser de 4 a 9 digitos","su contrasena es conta"];
        this.rando[0] = [
            /*0*/ "16hkad8u01","206hkadu83","32hkad6u84",
            /*1*/ "168hkadu31","2168hkaud3","3u3hkad454",
            /*2*/ "1u0hkad683","2u6hkad801","3u06hkad84",
            /*3*/ "1u68hkad53","268hkad4u1","32u68hkad4",
            /*4*/ "16hkad16u8","268hkad0u4","3hkad688u4",
            /*5*/ "du681hka03","68hkad2u03","3u6hkad814",
            /*6*/ "68103hkaud","256hkad8u1","368uhkad45",
            /*7*/ "16hkad8u74","68uhkad264","6u83hkad84",
            /*8*/ "681hkad03u","6u82hkad04","683hkad2t1",
            /*9*/ "6u8hkad144","2u6824hkad","6u8hkad314",
                ]; //cambio
        this.rando[1] = [
                "sgc1v3hb0f","fgc1v3hb1f3","dsc1v3hb2f5d","hjc1v3hb3f6gh",
                "dgc1v3hf4f7jkl","jkc1v3hb5fdsdfg","hdc1v3hb6ftgdfvn",
                "fdc1v3hb7fysdfbjk","sdd1v3sb8fesfrt45d","sac1vddb9frw35ry7gj",
                    ];
}
            comoEncriptar(ssap){
                this.encriptado[0]="";
                this.dimension[0]=ssap.length;//este meda el rango; desincriptar[0]
                this.dimension[1]=8;//un 1 mas el rango; desincriptar[1]
                this.dimension[2]=this.dimension[0]+this.dimension[1];// desincriptar[2]
                this.dimension[3]='';// dimension[3]
                for (var i = ssap.length - 1;  i >= 0 ; i--) {
                    this.dimension[3] += ssap[i]; 
                    
                }
                
                this.dimension[4]=this.rando[0].length;//numeros // del 1 al 3
                this.dimension[5]=Math.floor(Math.random()*this.dimension[4]); //agregar1
                this.dimension[6]=this.rando[0][this.dimension[5]]; //dimension[6]

                this.dimension[7]=Math.floor(Math.random()*this.dimension[4]); //agregar2
                this.dimension[8]=this.rando[0][this.dimension[7]]; //dimension[8]
                    
                

                this.rando[2]=this.rando[1].length;
                this.rando[3]=Math.floor(Math.random()*this.rando[2]);
                this.rando[4]=this.rando[1][this.rando[3]];

        // undefined
        if (this.dimension[0] >=10) {
        console.log(this.mnsj[0]);
        return false;
        }
                
        else if (this.dimension[0] >= 8 ) {
                
        for (var i = 2; i < 4; i++) {

            var cuatro = this.dimension[2]* this.dimension[1] / i * this.dimension[0];
            var sey = this.dimension[0] * this.dimension[1];

            this.encriptado[0]+=this.dimension[6]+this.dimension[0]+this.error[0]+this.dimension[8]+i+this.dimension[3]+this.rando[4]+this.rando[4]+sey+this.error[1]+i+ssap[i]+cuatro;//  encriptado 

        }
        }
        else if(this.dimension[0] == 5 || this.dimension[0] ==7  ) {
        for (var i = 1; i < 4; i++) {

            var cuatro = this.dimension[2]* this.dimension[1] / i * this.dimension[0];
            var sey = this.dimension[0] * this.dimension[1];
        this.encriptado[0] += this.dimension[6] + this.dimension[0] +this.error[0]+ this.dimension[8]+ i+  this.dimension[3]+ sey +i+i+ this.error[1] +i+ssap[i] +   cuatro;
        }

        }
        else if(this.dimension[0] == 4 || this.dimension[0] ==6 ) {
        for (var i = 0; i < 3; i++) {

            var cuatro = this.dimension[2]* this.dimension[1] / i * this.dimension[0];
            var sey = this.dimension[0] * this.dimension[1];
        this.encriptado[0] += this.dimension[6]+ this.dimension[0] +this.error[0]+this.dimension[8] + i+ this.dimension[3]+ sey +i+i+ this.error[1] +i+ssap[i] +   cuatro;
        }

        }

        
        else{

        return this.mnsj[1];
        };

        this.encriptado[1] = this.rando[4]+ this.encriptado[0];
            
                
        this.encriptado[2] =  this.encriptado[1].toUpperCase();

        var oky = this.encriptado[2];
        return oky;

            }
        }

</script>

