 




<?php 
 switch ($msg) {
   case '1':
     $mensaje="Usuario Repetido Vuelva a llenar sus datos";
     break;
     case '2':
     $mensaje="Hora incompatible";
     break;
     case '3':
     $mensaje="ya existe una reserva en esa hora";
     case '4':
      $mensaje="Ya existe un riego programado";
     break;
   
   default:
     $mensaje="";
     break;
 }




 ?>
















 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



<section class="section">



        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar  Riego</h4>
            </div>

            <div class="card-body">

              


                

                 


              <?php


 
   echo form_open_multipart('riego/agregarbd');
   //<?php echo $row->nombres; 

  ?> 
                <div class="row">
                    <div class="col-md-2">
                      
             <input type="hidden" name="idagenda" value="<?php echo $_POST['idagenda']; ?>"
             >
             <input type="hidden" name="idusuario" value="<?php echo $this->session->userdata('idusuario');?>">





                        <div class="form-group">

                            
                      

                            <label for="basicInput" >inicio </label>    
                                  

                            <input   type="time" class="form-control" name="inicio" required="">
                               
                            <p style="color:red;" ><?php echo $mensaje; ?></p>
                        </div>

                         


               <div class="form-group">
          <input type="submit" class="btn btn-primary mb-3" value="colocar inicio Riego" required="">
        </div>
                        

                        

                        
                    </div>
                    <div class="col-md-2">
                        


              <div class="form-group">

                            


                            <label for="basicInput" >fin </label>    
                                    

                            <input   type="time" class="form-control" name="fin" required="">
                               

                        </div>

       






                    </div>

  <div class="col-md-8">
                        


                        
       






                    </div>



                </div>
            </div>
        </div>
           <?php 
  echo form_close();
  

  ?>
  
    </section>



















     
   
           



            
















     






   



    <section class="section">
        <div class="row" id="table-striped-dark">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Riego</h4>


                    </div>


                    <div class="card-content">

                        
                      
                        <div class="table-responsive">

                            <table class="table table-striped table-dark mb-0">
                                <thead>
                                    <tr>
                                         <th scope="col">#</th>
                                                
                                                 <th scope="col">inicio</th>
                                                <th scope="col">fin</th>
                                                <th scope="col">realizo</th>
                                                <th scope="col">Modificar</th>
                                                <th scope="col">Eliminar</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$indice=1;

foreach ($riego->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      
      <td><?php echo $row->inicio; ?></td>
      <td><?php echo $row->fin; ?></td>
       
     
      <td><?php echo   realizado( $row->realizado); ?></td>
     
      

      <td>
<?php 

    echo form_open_multipart('riego/modificar');
         ?>
         <input type="hidden" name="idagenda" value="<?php echo $_POST['idagenda']; ?>">
        <input type="hidden" name="idRiego" value="<?php echo $row->idRiego; ?>">
        <button type="submit " class="btn btn-primary mb-3">Editar</button>
        <?php 
          echo form_close();
          


         

         ?>














       
         
      </td>
      <td>
        <?php 
         echo form_open_multipart('riego/Eliminarbd');
         ?>
          <input type="hidden" name="idagenda" value="<?php echo $_POST['idagenda']; ?>">

          
          
          
        <input type="hidden" name="idRiego" value="<?php echo $row->idRiego; ?>">
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