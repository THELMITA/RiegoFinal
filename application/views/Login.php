<?php 
 switch ($msg) {
   case '1':
     $mensaje="Error de ingreso";
     break;
     case '2':
     $mensaje="Acceso no valido";
     break;
     case '3':
     $mensaje="Gracias por usar el sistema";
     break;
   
   default:
     $mensaje="Ingrese sus datos";
     break;
 }



 ?>



<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up">
    <label for="tab-2" class="tab"></label>
    <div class="login-form">


            <?php 
      echo form_open_multipart('usuarios/validarusuario');

       ?>

      <div class="sign-in-htm">
        <div class="group">
          


           <label for="user" class="label" >Usuario</label>

          <input id="user" type="text" name="nombreUsuario"  class="input" > 

                
               
        </div>


        <div class="group">


          <label for="pass" class="label">Password</label>
        


            <input type="password" name="contrasenia"   class="input" data-type="password" >
               
                




        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label ></span> <?php echo $mensaje; ?></label>

         
        </div>
        <div class="group">
          <input type="submit" class="button" value="Ingrese">
        </div>
             <?php 




echo form_close();

 ?>


  <?php 
         echo form_open_multipart('usuarios/agregarlogin');
         ?>
        
        

        <div class="group">
         
        </div>
        <?php 
          echo form_close();

         ?> 
       
        
      </div>

      












        </div>
      </div>
    </div>
  </div>
</div>