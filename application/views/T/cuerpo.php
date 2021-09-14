



 
    <section class="content-wrapper">
        <div class="row" id="table-striped-dark">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lista de Usuarios</h4>
   
                    </div>
                    <div class="card-content">

                        
  
                      
                        <div class="table-responsive">
                            <table class="table table-striped table-dark mb-0">
                                <thead>
                                    <tr>
                                         <th scope="col">#</th>
                                                <th scope="col">Rol</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Primer Apelllido</th>
                                                <th scope="col">Segundo Apellido</th>
                                                <th scope="col">CI</th>
                                                <th scope="col">Genero</th>
                                                <th scope="col">TelefonoCelular</th>
                                                <th scope="col">nombreUsuario</th>


                                                <th scope="col">Modificar</th>
                                                <th scope="col">Eliminar</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$indice=1;

foreach ($usuario->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
       <td><?php echo $row->rol; ?></td>
      <td><?php echo $row->nombres; ?></td>
      <td><?php echo $row->apellidoPaterno; ?></td>
      <td><?php echo $row->apellidoMaterno; ?></td>
       <td><?php echo $row->ci; ?></td>
      <td><?php echo $row->genero; ?></td>
       <td><?php echo $row->telefonoCelular; ?></td>
       <td><?php echo $row->nombreUsuario; ?></td>
     

    
      <td>
        <?php 
         echo form_open_multipart('usuarios/modificar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <button type="submit " class="btn btn-primary mb-3">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>
      <td>
        <?php 
         echo form_open_multipart('usuarios/Eliminarbd');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
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