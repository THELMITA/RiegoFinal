

 <?php 
 switch ($msg2) {
   case '1':
     $mensaje="Usuario Repetido Vuelva a llenar sus datos";
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




<div class="lista">
  <div class="login-html">
 <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
<div class="login-form">

      
<?php


 
   echo form_open_multipart('usuarios/agregarbd');

  ?>



      <div class="sign-up-htm">
        <div class="group">



       <h3 class="text-muted" ><?php echo $mensaje; ?></h3>
          <label for="user" class="label">Nombres </label>

           

          <input   type="text" class="input" name="nombres" required="">
        </div>



         <div class="group">

          <label for="user" class="label"> Apellido Paterno</label>

           

          <input  type="text" class="input" name="apellidoPaterno" required="">


        </div>
          <div class="group">

          <label for="user" class="label">Apellido Materno </label>

           

          <input  type="text" class="input" name="apellidoMaterno" >


        </div>

          <div class="group">

          <label for="user" class="label">Rol </label>

           <select  class="input"  name="rol" value="usuario"  required="">
                      <option>admin</option>
                      <option>usuario</option>
                      
                    </select>


           

        


        </div>

        <div class="group">

          <label for="user" class="label">Usuario </label>

           

          <input  type="text" class="input" name="nombreUsuario" required="">


        </div>




       

       <div class="group">

          <label for="pass" class="label">Password</label>
          <input type="password" name="contrasenia"  id="pass" class="input"  required="">               
             
        </div>




         <div class="group">

          <label for="user" class="label">Ci </label>

           

          <input  type="text" class="input" name="ci"required="">


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
           

          <input  type="number" class="input" name="telefonoCelular" required="">


        </div>







        <div class="group">
          <input type="submit" class="button" value="Registrase" required="">
        </div>
       

        <?php 
  echo form_close();
  

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
 </div>
    </div>
  </div>
</div>
