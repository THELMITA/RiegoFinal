 



























     
   
           



            
















     






   
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">


    <section class="section">
        <div class="row" id="table-striped-dark">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sensor</h4>


                    </div>


                    <div class="card-content">

                        
                      
                        <div class="table-responsive">

                            <table class="table table-striped table-dark mb-0">
                                <thead>
                                    <tr>
                                         <th scope="col">#</th>
                                                
                                                 <th scope="col">Modelo</th>
                                                <th scope="col">Lectura</th>
                                                 <th scope="col">TipoLectura</th>

                                                <th scope="col">fecha</th>
                                                <th scope="col">Eliminar</th>                                        
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
             <td><?php echo $row->fechaLectura; ?></td>
     
      

  
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






                            </table>


                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  
  
   
 
   
</div>