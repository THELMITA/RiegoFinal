

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
<h2 class="text-muted">Registrarse</h2>
<div  >

      
<?php


 
   echo form_open_multipart('usuarios/agregarbd');

  ?>



      <div class="form-group">
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




 



<section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            

                            <label for="basicInput" >Nombress </label>        

                            <input   type="text" class="form-control" name="nombres" required="">

                              

                               



                        </div>

                        <div class="form-group">
                            <label for="helpInputTop">Input text with help</label>
                            <small class="text-muted">eg.<i>someone@example.com</i></small>
                            <input type="text" class="form-control" id="helpInputTop">
                        </div>

                        <div class="form-group">
                            <label for="helperText">With Helper Text</label>
                            <input type="text" id="helperText" class="form-control" placeholder="Name">
                            <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledInput">Disabled Input</label>
                            <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="disabledInput">Readonly Input</label>
                            <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                value="You can't update me :P">
                        </div>

                        <div class="form-group">
                            <label for="disabledInput">Static Text</label>
                            <p class="form-control-static" id="staticInput">email@mazer.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
 </div>
    </div>
  </div>
</div>