 



   


<div class="page-heading">
    <div class="page-title">

        
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
               
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        
                        <li class="breadcrumb-item"><?php echo "Hola ".$this->session->userdata('nombreUsuario'); ?> </li>
                        
                        <li class="breadcrumb-item active" aria-current="page"><?php echo "Tu rol  ".$this->session->userdata('rol'); ?></li>
                    </ol>

                      <ol class="breadcrumb">
                        
                       
                        
                        <li class="breadcrumb-item active" aria-current="page">
                            
                              <?php 
                             echo form_open_multipart('usuarios/modificar');
                             ?>
                         <input type="hidden" name="idusuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
                         <button type="submit " class="btn btn-primary mb-3">Modificar Usuario</button>
                         <?php 
                           echo form_close();

                          ?>
                        </li>
                    </ol>
                
                </nav>
            </div>
        </div>

        


    </div>




























    