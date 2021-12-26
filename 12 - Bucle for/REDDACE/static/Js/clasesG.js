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
            return false;
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
                //   console.log(res1); 

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
      Pintar4()    
      {
          $.ajax({   
              type:"POST",
              url:this.url, 
              data:this.data,
              success:function(res1)
              {
                  $('.Pintar4').html(res1);                     
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
      
} 
class Solicitud_Menu
{
     info = [];  cedula='';
    constructor( Cedula='' )
    {
        this.info[0]  =  Cedula;
    };
    opcM3() 
    {
        var url = '../Mantenimiento/control_PNF.php';  
        location.href=url; 
    }
    opcM4()
    {
        var url = '../Mantenimiento/control_MTR.php';
        location.href=url; 
    }
    opcA1()
    {
        this.info[1] = 'Intensivo';
            var url  = '../Procesos/Intensivo.php';
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1(); 
    }
    opcA2()
    {
        var url = '../Procesos/Inscripcion.php';  
        location.href=url; 
    }
    opcA3()
    {
        this.info[1] = 'Reparacion';
            var url  = '../Procesos/Reparacion.php';
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1(); 
    } 
    opcA4()
    {
        var url = '../Procesos/Control.php';  
        location.href=url; 
    }
    opcTG1()
    {
        this.info[1] = 'Reparacion';
            var url  = '../trabajo/new_trabajador.php';
            var Pintar = new Solicitud(this.info,url);
            var resultado = Pintar.Pintar1();
    }
    opcTG2()
    {
        var url = '../Trabajadores/Reguistrados.php';  
        location.href=url; 
    }
}


 
