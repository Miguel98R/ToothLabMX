// Swal.fire({
//     title:"Bienvenido!"
// });

function validar(){
    let uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve;
  
    
    uno = document.getElementById("PreguntaUno").value;
    dos = document.getElementById("PreguntaDos").value;
    tres = document.getElementById("PreguntaTres").value;
    cuatro = document.getElementById("PreguntaCuatro").value;
    cinco = document.getElementById("PreguntaCinco").value;
    seis = document.getElementById("PreguntaSeis").value;
    siete = document.getElementById("PreguntaSiete").value;
    ocho = document.getElementById("PreguntaOcho").value;
    nueve = document.getElementById("PreguntaNueve").selectedIndex;




    
    
     if(uno==="" || uno===false  || uno===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta uno"});
        return false;
    }else {
    if (uno.length > 2 || uno.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
     if(dos==="" || dos===false || dos===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta dos"});
        return false;
    }else {
    if (dos.length > 2 || dos.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }

     if(tres==="" || tres===false || tres===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta tres"});
        return false;
    }
    else {
    if (tres.length > 2 || tres.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
     if(cuatro==="" || cuatro===false  || cuatro===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta cuatro"});
        return false;
    }
    else {
    if (cuatro.length > 2 || cuatro.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
     if(cinco==="" || cinco===false || cinco===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta cinco"});
        return false;
    }else {
    if (cinco.length > 2 || cinco.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
     if(seis==="" || seis===false || seis===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta seis"});
        return false;
    }else {
    if (seis.length > 2 || seis.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
     if(siete==="" || siete===false  || siete===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta siete"});
        return false;
    }else {
    if (siete.length > 2 || siete.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
     if(ocho==="" || ocho===false  || ocho===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta ocho"});
        return false;
    }else {
    if (ocho.length > 2 || ocho.length <2) {
      Swal.fire({icon: 'error',title:"Por favor responde la pregunta con si o no"});
      return false;
    }

    }
    
    if( nueve == null || nueve == 0 ) {
       Swal.fire({icon: 'warning',title:"Por favor responde la pregunta nueve"});
  return false;
}


  

   
  
      
}