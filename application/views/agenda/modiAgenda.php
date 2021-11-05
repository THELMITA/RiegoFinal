







 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

 <section class="section" >
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modificar Agenda</h4>
            </div>

            <div class="card-body">
             


<?php

foreach ($info->result() as $row)
  {
 
   echo form_open_multipart('agenda/modificarbd');

  ?>

                  <input type="hidden" name="idagenda" value="<?php echo $row->idagenda; ?>">
                    <div class="col-md-6">





                        <div class="form-group">
                            


                            <label for="basicInput" >dia </label>    
                                <input type="hidden" name="idusuario" value="<?php echo $this->session->
                                userdata('idusuario'); ?>">

                                  

                           
                            

                              <input   type="date"  class="form-control" name="dia" 
                              value="<?php echo  fechaConvertir($row->dia);?>">
                               

                        </div>

            
          <div class="form-group">

          <label for="basicInput" class="label">Recordatorio </label>

           

          <input  type="text" class="form-control" name="recordatorio" value="<?php echo $row->recordatorio;  ?> " >


        </div>


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
          <input type="submit" class="btn btn-primary mb-3" value="Modificar" required="">
        </div>




        <?php 
  echo form_close();
  }

  ?>



























                      
                    </div>


                    <div class="col-md-6">
                       
                    </div>

                </div>
            </div>
        </div>
    </section>



