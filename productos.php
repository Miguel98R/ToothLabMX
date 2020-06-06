 <ul class="nav nav-tabs">
  <li class="nav-item active">
    <a class="nav-link active" data-toggle="tab" href="#listaProductos">Lista de productos
    </a></li>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#newroducto">Nuevo producto</a></li>
  </li>
  
</ul>

   <div class="tab-content">
    <div id="listaProductos" class="tab-pane fade show active">
     <?php include "components/listadoProductos.php "; ?> 
    </div>
    <div id="newroducto" class="tab-pane fade">
     <?php include "components/registroProductos.php" ; ?> 
     </div>
    
  </div>