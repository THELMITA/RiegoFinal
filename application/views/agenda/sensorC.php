 



























     
   
           



            
















     






   
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">






      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ConReportes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th >#</th>
                  <th >Modelo</th>
                                                <th >Lectura</th>
                                                 <th >TipoLectura</th>
                                                 <th >fecha</th>
                                             
                                                <th >Eliminar</th>  
                  </tr>
                  </thead>




                  <tbody>
                  <?php
$indice=1;

foreach ($sensor->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      
      <td><?php echo $row->modelo; ?></td>
      <td><?php echo $row->lectura; ?></td>
       
         <td><?php echo $row->tipoLectura; ?></td>
             <td><?php echo $row->fechaRegistro; ?></td>
     
      

  
      <td>
        <?php 
         echo form_open_multipart('sensor/Eliminarbd');
         ?>
          
        <input type="hidden" name="idSensor" value="<?php echo $row->idSensor; ?>">
        <button type="submit " class="btn btn-primary mb-3">Eliminar</button>
        <?php 
          echo form_close();

         ?>
      </td>
    </tr>
  <?php

  $indice++;
}



?>


                  
                  
                  
             
                  




                  </tbody>




                  <tfoot>
                  <tr>
                  <th >#</th>
                  <th >Modelo</th>
                                                <th >Lectura</th>
                                                 <th >TipoLectura</th>
                                                 <th >fecha</th>
                                             
                                                <th >Eliminar</th>  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>















   
  
  
   
 
   
</div>