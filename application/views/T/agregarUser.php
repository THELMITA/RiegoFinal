

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
      <div class="col-sm-8">


<?php


 
   echo form_open_multipart('usuarios/agregarbd');

  ?>

                  
                    





                        <div class="form-group">
                            


                            <label for="basicInput" >Nombres </label>          

                            <input   type="text"  class="form-control" name="nombres" required="">
                               

                        </div>

                        <div class="form-group">

          <label for="basicInput" class="label"> Apellido Paterno</label>

           

          <input  type="text" class="form-control" name="apellidoPaterno" required="">


        </div>
          <div class="form-group">

          <label for="basicInput" class="label">Apellido Materno </label>

           

          <input  type="text" class="form-control" name="apellidoMaterno" >


        </div>

          <div class="form-group">

          <label for="basicInput"class="label">Rol </label>

           <select  class="form-control"  name="rol" value="usuario"  required="">
                      <option>admin</option>
                      <option>usuario</option>
                      
                    </select>


           

        


   



       

       




         <div class="form-group">

          <label for="basicInput" class="label">Ci </label>

           

          <input  type="text" class="form-control" name="ci"required="">


        </div>



         <div class="form-group">

          <label for="basicInput" class="form-control">genero</label>

          <label class="text">hombre</label>
          <input type="radio"  name="genero"  checked  value="M">
          <label class="text">Mujer</label>
          <input type="radio"  name="genero"  value="F" >
           

         


        </div>

         <div class="form-group">

          <label for="basicInput" class="label">Celular</label>
           

          <input  type="number" class="form-control" name="telefonoCelular" required="">


        </div>







        <div class="form-group">
          <input type="submit" class="button" value="Registrase" required="">
        </div>




        <?php 
  echo form_close();
  

  ?>



























                      
                    </div>


                 

                </div>
            </div>
        </div>
 








