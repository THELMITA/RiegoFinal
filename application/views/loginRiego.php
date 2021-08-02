



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






<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">



           
          </div>

            
     

          
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>


             <?php 
      echo form_open_multipart('usuarios/validarusuario');

       ?>
       <div  class="box">
                    

                    <p class="text-muted" ><?php echo $mensaje; ?></p>

            

              <div class="form-floating mb-3">
                <input type="text" name="nombreUsuario"  class="form-control"   placeholder="login"> required autofocus>

                
                <label for="floatingInputUsername">Username</label>
              </div>

            

              <hr>

              <div class="form-floating mb-3">
                <input type="password" name="contrasenia" class="form-control" id="floatingPassword" placeholder="Password">
               
                <label for="floatingPassword">Password</label>
              </div>

             

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
              </div>

             

           
<?php 
echo form_close();

 ?>
              
 <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>
          
          </div>




        </div>
      </div>
    </div>
  </div>
</body>






