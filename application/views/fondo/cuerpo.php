






  





  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listas de Estudiantes</h1>
            <?php 
            echo form_open_multipart('estudiantes/agregar');
                             ?>

           <button type="submit " class="btn btn-primary mb-3">Agregar Estudiante </button>
       <?php 
          echo form_close();

          ?>
          </div>

          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th class="cell" scope="col">#</th>
                        <th class="cell" scope="col">Nombre</th>
                        <th class="cell"scope="col">Primer Apelllido</th>
                         <th  class="cell"scope="col">Segundo Apellido</th>
                         <th class="cell"scope="col">CI</th>
                         <th class="cell"scope="col">Sexo</th>
                         
                         <th class="cell"scope="col">estado</th>
                          <th class="cell"scope="col">curso</th>
                         
                         <th class="cell"scope="col">Modificar</th>
                         <th class="cell"scope="col">Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                 

<?php
$indice=1;

foreach ($t->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombre; ?></td>
      <td><?php echo $row->primerApellido; ?></td>
      <td><?php echo $row->segundoApellido; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->sexo; ?></td>

      
      <td><?php echo $row->estado; ?></td>
      <td><?php echo $row->curso; ?></td>
     

    
      

   
      <td>
        <?php 
         echo form_open_multipart('estudiantes/modificar');
         ?>
        <input type="hidden" name="idestudiante" value="<?php echo $row->idestudiante; ?>">
       
         <button type="submit " class="btn btn-success btn-xs">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>



      <td>
        <?php 
         echo form_open_multipart('estudiantes/Eliminarbd');
         ?>
        <input type="hidden" name="idestudiante" value="<?php echo $row->idestudiante; ?>">
        <button type="submit " class="btn btn-danger btn-xs">Eliminar</button>
        <?php 
          echo form_close();

         ?>
      </td>
    </tr>
  <?php

  $indice++;
}

?>
              
                
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->