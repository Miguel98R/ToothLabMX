  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MDBootstrap Datatables  -->
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/main.js"></script>
  <!-- Your custom scripts (optional) -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


  <script >
  
  function validar(){
    let psw;  
   
    psw = document.getElementById("psw").value;

     if(psw==="" || psw===false || psw===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor ingresa tu contraseña"});
        return false;
     }      
}

  </script>
  