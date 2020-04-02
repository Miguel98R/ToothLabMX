 
 function validar(){
     servicio = document.getElementById("servicio").selectedIndex;
image = document.getElementById("image").value;


if( servicio == null || servicio == 0 ) {
       alert("Por favor selecciona un servicio");
  return false;
}



if( image == null || image == 0 ) {
       alert("Por favor selecciona una foto");
  return false;
}
 
 
 
 }


 
 