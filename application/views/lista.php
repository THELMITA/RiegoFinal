  <div class="container">
<div class="container">
  <div class="row">
    <div class="col-md-12">

 

         <br>




               <?php 
         echo form_open_multipart('usuarios/logout');
         ?>
      
        <button  class="btn btn-white ml-2"  type="submit " >Salir</button>
     
        <?php 
          echo form_close();

         ?>



           <div class="col-sm-6">
            
              
             

           
          </div>





 <div class="card card5">



<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apelllido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">CI</th>
      <th scope="col">TelefonoCelular</th>
      <th scope="col">TelefonoFijo</th>
      <th scope="col">Direccion</th>
       <th scope="col">Rol</th>
    




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
      <td><?php echo $row->nombres; ?></td>
      <td><?php echo $row->apellido1; ?></td>
      <td><?php echo $row->apellido2; ?></td>
       <td><?php echo $row->cedulaIdentidad; ?></td>
      <td><?php echo $row->telefonoCelular; ?></td>
       <td><?php echo $row->telefonoFijo; ?></td>
        <td><?php echo $row->direccion; ?></td>
      <td><?php echo $row->rol; ?></td>

    
      <td>
        <?php 
         echo form_open_multipart('usuarios/modificar');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <button type="submit " class="btn btn-white ml-2">Modificar</button>
        <?php 
          echo form_close();

         ?>
      </td>
      <td>
        <?php 
         echo form_open_multipart('usuarios/Eliminarbd');
         ?>
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
        <button type="submit " class="btn btn-white ml-2">Eliminar</button>
        <?php 
          echo form_close();

         ?>
      </td>
    </tr>
  <?php

  $indice++;
}

?>

 <?php 
         echo form_open_multipart('usuarios/agregar');
         ?>
        
        <button type="submit " class="btn-block btn-color" >AgregarUsuario</button>
        <?php 
          echo form_close();

         ?>


</div>

</div>



    </div>
  </div>
</div>
</div>