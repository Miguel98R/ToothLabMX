

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="container py-4" >


                           
                <table class="table table-striped table-hover table-bordered font-weight-bolder " >
                    <thead class="thead-dark">
                    <tr>
                        <td>#</td>
                        <td >Nombre</td>
                        <td >Precio</td>
                  
                        </thead>
                      </tr>
                    </thead>
                 
                    <tbody>
                       <?php 
                      while($datos=$result->fetch_assoc()){
                    ?>
                    <tr>
                          <td><?php echo $datos['id'] ?></td>
                          <td style="width: 50%;" ><?php echo utf8_encode( $datos['nombre']) ?></td>
                          <td><?php echo $datos['precio'] ?></td>
                         
                          </tr>
                          <?php }?>
                    </tbody>
                  
                </table>
     
    </div>   

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>