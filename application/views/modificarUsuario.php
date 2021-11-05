
<div class="lista">
  <div class="login-html">
 <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Modificar</label>
<div class="login-form">


<?php

foreach ($infousuario->result() as $row)
  {
  
   echo form_open_multipart('usuarios/modificarbd');
  ?>
   <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">



      <div class="sign-up-htm">
        <div class="group">
          <label for="user" class="label">Nombres </label>

           

          <input   type="text" class="input" name="nombres" value="<?php echo $row->nombres;  ?> "   required="">
        </div>



         <div class="group">

          <label for="user" class="label"> Apellido Paterno</label>

           

          <input  type="text" class="input" name="apellidoPaterno"value="<?php echo $row->apellidoPaterno;  ?> "  required="">


        </div>
          <div class="group">

          <label for="user" class="label">Apellido Materno </label>

           

          <input  type="text" class="input" name="apellidoMaterno" value="<?php echo $row->apellidoMaterno;  ?> "  required="">


        </div>

          <div class="group">

          <label for="user" class="label">Rol </label>
            
          <label for="user" class="label"><?php echo $row->rol;  ?> </label>

            <select  class="input"  name="rol" value="<?php echo $row->rol;  ?> "  required="">
                      <option>usuario</option>
                      <option>admin</option>
                      
                    </select>

          

        </div>

        <div class="group">

          <label for="user" class="label">Usuario </label>

           

          <input  type="text" class="input" name="nombreUsuario" value="<?php echo $row->nombreUsuario;  ?> "  required="">


        </div>




       

       <div class="group">

          <label for="pass" class="label">Password</label>
          <input type="password" name="contrasenia"  class="input" value="<?php echo $row->contrasenia;  ?> "  required="">               
             
        </div>




         <div class="group">

          <label for="user" class="label">Ci </label>

           

          <input  type="text" class="input" name="ci" value="<?php echo $row->ci;?> "  required="">


        </div>



         <div class="group">

          <label for="user" class="label">genero</label>

          <label class="text">hombre</label>
          <input type="radio"  name="genero"  checked  value="M">
          <label class="text">Mujer</label>
          <input type="radio"  name="genero"  value="F" >
           

         


        </div>

         <div class="group">

          <label for="user" class="label">Celular</label>
           

          <input  type="text" class="input" name="telefonoCelular" value="<?php echo $row->telefonoCelular;  ?> "  required="">


        </div>







        <div class="group">
          <input type="submit" class="button" value="Modificar">
        </div>
       




























       




  <?php 
  echo form_close();
  }

  ?>



 <?php 
         echo form_open_multipart('usuarios/listaUsuarios');
         ?>
      
        

        <div class="group">
          <input type="submit" class="button" value="Cancelar">
        </div>
        

     
        <?php 
          echo form_close();

         ?>








            
</div>
<div class="col-4">

            
</div>
































    </div>
  
</div>
