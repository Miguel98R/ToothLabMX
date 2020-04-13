// Swal.fire({
//     title:"Bienvenido!"
// });

function validar(){
    let user,psw;
  
    
    user = document.getElementById("user").value;
    psw = document.getElementById("psw").value;
    

     if(user==="" || user===false  || user===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor ingresa tu usuario"});
        return false;
    }
     if(psw==="" || psw===false || psw===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor ingresa tu contraseña"});
        return false;
    }

    

  

   
  
      
}