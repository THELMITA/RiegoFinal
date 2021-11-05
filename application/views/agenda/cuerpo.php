 

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
<section class="section">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar Agenda</h4>
            </div>

            <div class="card-body">
              <?php
  
   echo form_open_multipart('agenda/agregarbd');

  ?>
                <div class="row">
                    <div class="col-md-6">


                        <div class="form-group">
                            


                            <label for="basicInput" >dia </label>    
                                <input type="hidden" name="idusuario" value="<?php echo $this->session->userdata('idusuario'); ?>">      

                            <input   type="date"  class="form-control" name="dia" required="">
                               

                        </div>
                          <div class="form-group">

          <label for="basicInput" class="label">Recordatorio </label>

           

          <input  type="text" class="form-control" name="recordatorio" >


        </div>                       

                        

                        
                    </div>
                    <div class="col-md-6">
                        


                         <div class="form-group">

          <label for="basicInput"class="label">tipo </label>
          
        </div>  
        <div class="form-group">

        <div class="form-check">
  <input class="form-check-input" type="radio" name="tipo" value="1" checked>

  <label class="form-check-label" for="flexRadioDefault1"> Riego  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="tipo" value="0" >

  <label class="form-check-label" for="flexRadioDefault2">  Cosecha </label>
</div>
</div>

 <div class="form-group">
          <input type="submit" class="btn btn-primary mb-3" value="Agregar Agenda" required="">
        </div>




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
                        <h4 class="card-title">Agenda</h4>


                    </div>


                    <div class="card-content">

                        
                      
                        <div class="table-responsive">

                            <table class="table table-striped table-dark mb-0">
                                <thead>
                                    <tr>
                                         <th scope="col">#</th>
                                                
                                                <th scope="col">Dia</th>
                                                <th scope="col">Mensaje</th>
                                                <th scope="col">tipo</th>
                                                
                                                <th scope="col">Agregar Riego</th>

                                                <th scope="col">Modificar</th>
                                                <th scope="col">Eliminar</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$indice=1;

foreach ($d->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      
      <td><?php echo $row->dia; ?></td>
      <td><?php echo $row->recordatorio; ?></td>
      <td><?php echo tipo($row->tipo); ?></td>
       
     

    
      <td>
        <?php 
         

         $tip=tipo($row->tipo);
         //$di=($row->idAgenda);
         $id=idagenda($row->idagenda);
         if ($tip=="Riego") {
           
         

          echo form_open_multipart('riego/index');
          
         ?>
      <input type="hidden" name="idagenda" value="<?php echo $row->idagenda; ?>">
        
        
        <input type="hidden" name="dia" value="<?php echo $row->dia; ?>">


        <button type="submit " 
            
         class="btn btn-primary mb-3">Riego</button>

        <?php 
          echo form_close();


        }
        else

        {
          ?>

          
           <?php 



        }

         ?>
      </td>

      <td>
<?php 

    echo form_open_multipart('agenda/modificar');
         ?>
        <input type="hidden" name="idagenda" value="<?php echo $row->idagenda; ?>">
        <button type="submit " class="btn btn-primary mb-3">Editar</button>
        <?php 
          echo form_close();
          


         

         ?>














       
         
      </td>
      <td>
        <?php 
         echo form_open_multipart('agenda/Eliminarbd');
         ?>
        <input type="hidden" name="idagenda" value="<?php echo $row->idagenda; ?>">
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