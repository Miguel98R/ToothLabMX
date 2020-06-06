 <ul class="nav nav-tabs">
  <li class="nav-item active">
    <a class="nav-link active" data-toggle="tab" href="#lista">Lista de dentistas
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#new">Nuevo dentista</a>
  </li>
  
</ul>

   <div class="tab-content">
    <div id="lista" class="tab-pane fade show active">
     <?php include "components/listadoDentistas.php"; ?> 
    </div>
    <div id="new" class="tab-pane fade">
     <?php include "components/registroDentistas.php"; ?> 
     </div>
    
  </div>