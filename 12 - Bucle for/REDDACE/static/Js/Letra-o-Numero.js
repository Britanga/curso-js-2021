function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
}
 
function soloNumeros(e){
 key = e.keyCode || e.which;
 tecla = String.fromCharCode(key).toLowerCase();
 numeros = "1234567890";
 numeros_especiales = "8-37-39-46";

 tecla_especial = false
 for(var i in numeros_especiales){
      if(key == numeros_especiales[i]){
          tecla_especial = true;
          break;
      }
  }

  if(numeros.indexOf(tecla)==-1 && !tecla_especial){
      return false;
  }

}

function bloqueo(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "1234567890abcdefghijklmnopqrstuvwxyz- ";
    numeros_especiales = "00-17-18-19-20-32-33-34-35-36-37-38-39-40-41-42-43-44-45-46-47-58-59-60-61-62-63-91-92-93-94-95-96-123-124-125-126-128";
    
    tecla_especial = false
    for(var i in numeros_especiales){
         if(key == numeros_especiales[i]){
             tecla_especial = true;
             break;
         }
     }
   
     if(numeros.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
   
}

function sologion(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "1234567890áéíóúabcdefghijklmnñopqrstuvwxyz-";
    numeros_especiales = "";
   
    tecla_especial = false
    for(var i in numeros_especiales){
         if(key == numeros_especiales[i]){
             tecla_especial = true;
             break;
         }
     }
   
     if(numeros.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
   
}

function correo(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       numeros = "1234567890áéíóúabcdefghijklmnñopqrstuvwxyz-.";
       numeros_especiales = "";
      
       tecla_especial = false
       for(var i in numeros_especiales){
            if(key == numeros_especiales[i]){
                tecla_especial = true;
                break;
            }
        }
      
        if(numeros.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
      
}
   

/*
maxlength="8" minlength="6" 
onkeypress="return bloqueo(event)"
onkeypress="return soloLetras(event)"
onkeypress="return soloNumeros(event)"
min="1800-01-01" max="2078-01-01"
maxlength="8" minlength="6" title="debe de colocar su contraseña esta debe de contener un maximo de caracteres de 8 y minimo 6"
*/ 
