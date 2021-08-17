 
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item  ">                
                   
                 <a>

                                             <?php 
                                 echo form_open_multipart('usuarios/logout');
                                 ?>
      
                             <button  class="btn btn-outline-primary"  type="submit " >Salir</button>
     
                             <?php 
                               echo form_close();

                              ?>
                </a>



            </li>
            <li class="sidebar-item  ">                     
                 <a>
                         
         <?php 
         echo form_open_multipart('usuarios/agregar');
         ?>
        
        <button type="submit "  class="btn btn-outline-primary" >AgregarUsuario</button>
        <?php 


          echo form_close();

         ?>

                </a>
            </li>

              <li class="sidebar-item  ">                     
                 <a>
                         
         <?php 
         echo form_open_multipart('riego/index');
         ?>
        
        <button type="submit "  class="btn btn-outline-primary" >lista Riego</button>
        <?php 
          echo form_close();

         ?>

                </a>
            </li>           


            
        </ul>
    </div>






  </div>







  <div id="main">






















    