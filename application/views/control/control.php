 

















 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



<section class="section">



        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modificar  Riego</h4>
            </div>

            <div class="card-body">

              

                

                


   
                <div class="row">
                    <div class="col-md-2">
           
           
           

           <?php

   echo form_open_multipart('sensor/prendido');
   //<?php echo $row->nombres; 

  ?>


                        <div class="form-group">

                            
                      

                             
                                  

                           

                        </div>

                         


               <div class="form-group">
          <input type="submit" class="btn btn-primary mb-3" value="prendido" required="">
        </div>
                        
        <?php 
  echo form_close();
  

  ?>
                        

                        
                    </div>
                    <div class="col-md-2">
                        

        <?php

   echo form_open_multipart('sensor/apagado');
   //<?php echo $row->nombres; 

  ?>

              <div class="form-group">

                            


                           
                          
                               

                        </div>

       

               <div class="form-group">
          <input type="submit" class="btn btn-primary mb-3" value="Apagado" required="">
        </div>

      <?php 
  echo form_close();
  

  ?>



                    </div>

  <div class="col-md-8">
                        


                        
       






                    </div>



                </div>
            </div>
        </div>
   
    </section>

<input   type="text" class="input" name="nombres" required="" value="">








    <section class="section">
        <div class="row" id="table-striped-dark">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Control de sensor</h4>


                    </div>


                    <div class="card-content">

                        
                      
                        <div class="table-responsive">

                            <table class="table table-striped table-dark mb-0">
                                <thead>
                                    <tr>
                                         <th scope="col">#</th>
                                                
                                       <th scope="col">estado</th>
                                                                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$indice=1;

foreach ($control->result() as $row) 

{
  
  
  ?>
    <tr>
      <th scope="row"><?php echo $indice;?></th>
      
      <td>

        <input type="text" name="estado" value="<?php echo $row->estado; ?>">

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