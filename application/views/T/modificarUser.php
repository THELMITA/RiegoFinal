

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
     $mensaje="";
     break;
 }




 ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">


 <section class="section" >
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modificar Usuario</h4>
            </div>

            <div class="card-body">
             


<?php

foreach ($infousuario->result() as $row)
  {
 
   echo form_open_multipart('usuarios/modificarbd');

  ?>


                  
                    <div class="col-md-6">





                        <div class="form-group">
                            


                            <label for="basicInput" >Nombres </label>          

                            <input   type="text"  class="form-control" name="nombres" required=""   value="<?php echo $row->nombres;  ?> " >
                               

                        </div>

                        <div class="form-group">

  <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
          <label for="basicInput" class="label"> Apellido Paterno</label>

           

          <input  type="text" class="form-control" name="apellidoPaterno" required="" value="<?php echo $row->apellidoPaterno;  ?> " >


        </div>
          <div class="form-group">

          <label for="basicInput" class="label">Apellido Materno </label>

           

          <input  type="text" class="form-control" name="apellidoMaterno"  value="<?php echo $row->apellidoMaterno;  ?> " >


        </div>

          <div class="form-group">

          <label for="basicInput"class="label">Rol </label>
          <br>
          
   
                <h5><?php echo $row->rol;  ?></h5>

           

        


        </div>

        <div class="form-group">

          <label for="basicInput" class="label">Usuario </label >

           

          <input  type="text" class="form-control" name="nombreUsuario" value="<?php echo $row->nombreUsuario;  ?> " required="">

   <p ><code><?php echo $mensaje; ?></code></p>
        </div>




       

       <div class="form-group">

          <label for="basicInput" class="label">Password</label>
          <input type="password" name="contrasenia"  id="pass" class="form-control"  required=""  >               
             
        </div>




         <div class="form-group">

          <label for="basicInput" class="label">Ci </label>

           

          <input  type="text" class="form-control" name="ci"required="" value="<?php echo $row->ci;?> " >


        </div>



         <div class="form-group">



          <label class="text">hombre</label>
          <input type="radio"  name="genero"  checked  value="M">
          <label class="text">Mujer</label>
          <input type="radio"  name="genero"  value="F" >
           

         


        </div>

         <div class="form-group">

          <label for="basicInput" class="label">Celular</label>
           

          <input  class="form-control" name="telefonoCelular" required="" value="<?php echo $row->telefonoCelular; ?> "   >


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








