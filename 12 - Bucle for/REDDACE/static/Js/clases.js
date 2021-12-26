class Solicitud_Efecto
{ 
    cedula='';  tipo=''; url=''; 
    constructor( Cedula='', Tipo='', Url='')
    {
        this.cedula  = Cedula;
        this.tipo    = Tipo;
        this.url     = Url;
    };
    Solisita_tabla_Peticion()
    {        
        var url  = this.url; 
        var data='r0='+this.cedula+'&r1='+this.tipo;
        var Pintar = new Solicitud(data,url);
            var resultado = Pintar.Pintar2();
    }  
}
class Solicitud
{
     url = '';
     data;
     veamo = ''; 
      constructor(datos,donde)
      {
          this.data = datos;
          this.url = donde;
      };
      Pintar1()   
      {
          $.ajax({   
              type:"POST",
              url:this.url, 
              data:this.data,
              success:function(res1)
              {
                  $('.Pintar1').html(res1);                     
              }
          }); 
      }
      Pintar2()   
      {
          $.ajax({   
              type:"POST",
              url:this.url, 
              data:this.data,
              success:function(res1)
              {
                  $('.Pintar2').html(res1);                     
              }
          }); 
      }
      Pintar3()    
      {
          $.ajax({   
              type:"POST",
              url:this.url, 
              data:this.data,
              success:function(res1)
              {
                  $('.Pintar3').html(res1);                     
              }
          }); 
      }
      Mostar() 
      { 
          $.ajax({   
              type:"POST",
              url:this.url, 
              data:this.data,
              success:function(res1) 
              {
                //   console.log(res1); 
                  $('#comunicasion').html(res1); 
              }
          }); 
      }
      Nada() 
      { 
          $.ajax({   
              type:"POST",
              url:this.url, 
              data:this.data,
              success:function(res1)
              {
                  $('#comunicasion').html(res1); 
              }
          }); 
      }
      
} 
class Solicitud_Menu
{
     info = [];  cedula='';
    constructor( Cedula='' )
    {
        this.info[0]  =  Cedula;
    };
    opcS1()
    {       
        this.info[1]  = 'Recork de nota';
        this.info[2]  =  'Solicitud'; 
                var url = '../Solicitudes/Recork_Nota.php'; 
                var Pintar = new Solicitud(this.info,url);
                var resultado = Pintar.Pintar1();
    } 
    opcS2() 
    {       
        this.info[1] = 'Cata de Comportamiento';
        this.info[2]  =  'Solicitud'; 
            var url = '../Solicitudes/Comportamiento.php';
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }  
    opcS3()
    {       
        this.info[1] = 'Historial Acadeico';
        this.info[2]  =  'Solicitud'; 
            var url = '../Solicitudes/Historial.php';
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcS4()
    {        
     var url = '../Solicitudes/control.php';
     location.href=url;
    }
    opcR1()
    {
            var url = '../Reclamos/reclamo.php'; 
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcI1()
    {
        this.info[1] = 'Historial Acadeico';
        this.info[2]  =  'Solicitud'; 
            var url = '../inscripciones/nuevo_Ingreso.php'; 
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcI2()
    { 
        this.info[1] = 'Historial Acadeico';
        this.info[2]  =  'Solicitud'; 
            var url = '../inscripciones/update.php'; 
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcC1()
    {  
        this.info[1] = 'Historial Acadeico';
        this.info[2]  =  'Solicitud'; 
            var url = '../Recuperacion/Intensivo.php'; 
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcIAux()
    {  
        this.info[1] = 'Historial Acadeico';
        this.info[2]  =  'Solicitud'; 
            var url = '../inscripciones/adelanto.php'; 
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcC2()
    {  
        this.info[1] = 'Historial Acadeico';
        this.info[2]  =  'Solicitud'; 
            var url = '../Recuperacion/repitencia.php'; 
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcI3()
    {  
        var url = '../inscripciones/control.php'; 
        location.href=url;;
    }
    opcM3()
    {
        var url = '../Mantenimiento/Mas_PNF.php';  
        var Pintar = new Solicitud(this.info,url);
        var resultado = Pintar.Pintar1();
    }
}
class nose{
    nose(){
        
$.ajax({  
    type:"POST", 
    url:"../../../Generator/PDF_empresa/tramite_empresa_individual.php", 
     data:"sera="+EnEspera, 
      success: function(datos){    
            setTimeout(function()
            {   
                $("#ver-pdf").modal
                ({    
                    show:true,       
                    backdrop:"static"  
                });      
                },10); 
                PDFObject.embed("../../../Temp/reporte.pdf", "#view_pdf");  
            }                    
        });
    }
}
class Ayuda
{

      constructor(dato)
      {
          this.que = dato;
          this.ayuda();
      };
      ayuda()
      {
      return console.log(this.que);
      };
} 
class Mensaje
{
    
    msj='';
    tip='';
    que='';
      constructor(primero,decir,ocurre)
      {
          this.que = primero;
          this.msj = decir;
          this.tip = ocurre;
      };

      Mensaje()
      {
       swal (this.que , this.msj , this.tip);
       swal (this.que , this.msj,  "success" );
       swal (this.que , this.msj,  "error" );
       swal (this.que , this.msj,  "info" );
       swal (this.que , this.msj,  "warning" );
// echo "<script> swal ('Disculpe' , '$info[1]' , 'warning');</script>";

      };
}