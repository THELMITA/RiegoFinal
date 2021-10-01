 

















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

              

                

                


              <?php



foreach ($info->result() as $row)
  {
   echo form_open_multipart('riego/modificarbd');
   //<?php echo $row->nombres; 

  ?>
                <div class="row">
                    <div class="col-md-2">
             <input type="hidden" name="idagenda" value="<?php echo $_POST['idagenda']; ?>"
             >
             <input type="hidden" name="idRiego" value="<?php echo $row->idRiego; ?>">
             <input type="hidden" name="idusuario" value="<?php echo $this->session->userdata('idusuario');?>">





                        <div class="form-group">

                            
                      

                            <label for="basicInput" >inicio </label>    
                                  

                            <input   type="time" class="form-control" name="inicio" required="" value="<?php echo $row->inicio; ?>">
                               

                        </div>

                         


               <div class="form-group">
          <input type="submit" class="btn btn-primary mb-3" value="colocar inicio Riego" required="">
        </div>
                        

                        

                        
                    </div>
                    <div class="col-md-2">
                        


              <div class="form-group">

                            


                            <label for="basicInput" >fin </label>    
                                    

                            <input   type="time" class="form-control" name="fin" required="" value="<?php echo $row->fin; ?>">
                               

                        </div>

       






                    </div>

  <div class="col-md-8">
                        


                        
       






                    </div>



                </div>
            </div>
        </div>
           <?php 
  echo form_close();
  
}
  ?>
    </section>



















     
   
           



            
















     






  
  
   
 
   
</div>