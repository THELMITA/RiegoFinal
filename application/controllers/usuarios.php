
		
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
 
	public function index()
	{
    
		
      $data['msg']=$this->uri->segment(3);

      if ($this->session->userdata('nombreUsuario')) 
      {
      	redirect('usuarios/panel','refresh');
      }
     else
      {
      	$this->load->view('inc_head.php');  	    
		  
        $this->load->view('Login.php',$data);
      
	     	$this->load->view('inc_footer.php'); 
       }

     
	}

   

  public function listaUsuarios()
  {
    $lista=$this->usuario_model->lista();
    $data['usuario']=$lista;

    $lista2=$this->agenda_model->lista();
    $data['d']=$lista2;
 



/*
       $this->load->view('t/cabeza.php');       

           
        $this->load->view('t/menuAdmin.php'); 
         $this->load->view('t/user.php');

        $this->load->view('t/cuerpo.php',$data);
        
      
        $this->load->view('t/base.php'); 

*/




         $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php');       

           
      $this->load->view('fondo/menuAdmin.php'); 
     

      $this->load->view('t/cuerpo.php',$data);
      
    
      $this->load->view('fondo/base.php'); 


    }
    else
    {

      $this->load->view('fondo/cabeza.php');       

           
      $this->load->view('fondo/menuUser.php'); 
     

      $this->load->view('agenda/cuerpo.php',$data);
      
    
      $this->load->view('fondo/base.php'); 


    }





   
       


  }



   public function agregar()
  {

       $data['msg2']=$this->uri->segment(3);
    //$this->load->view('inc_head.php'); 



 $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 

      $this->load->view('fondo/menuadmin.php');
      $this->load->view('t/agregarUser.php',$data); //contenido
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 

      $this->load->view('fondo/menuadmin.php');
      $this->load->view('t/agregarUser.php',$data); //contenido
      $this->load->view('fondo/base.php');

    }






/*
     $this->load->view('t/cabeza.php'); 
     $this->load->view('t/menuM.php');

    $this->load->view('t/agregarUser.php',$data); //contenido
    $this->load->view('inc_footer.php');  //archivos del footer
*/

  }

   public function agregarlogin()
  {

       $data['msg2']=$this->uri->segment(3);
    
       $rol=$this->session->userdata('rol');


       if($rol=="admin"){
   
         $this->load->view('fondo/cabeza.php'); 
         $this->load->view('fondo/menuadmin.php');
         $this->load->view('t/agregarUser.php',$data); //contenido
         $this->load->view('fondo/base.php');
       }
       else
       {
   
         $this->load->view('fondo/cabeza.php'); 
         $this->load->view('fondo/menuUser.php');
         $this->load->view('t/agregarUser.php',$data); //contenido
         $this->load->view('fondo/base.php');
   
       }
   










  }


  public function agregarbd()
  {

    
    $CI=$_POST['ci'];
    $N=$_POST['apellidoPaterno'];

       $data['nombres']=$_POST['nombres'];
       $data['apellidoPaterno']=$_POST['apellidoPaterno'];
       $data['apellidoMaterno']=$_POST['apellidoMaterno'];
    
       $data['ci']=$_POST['ci'];
       $data['genero']=$_POST['genero'];
       $data['telefonoCelular']=$_POST['telefonoCelular'];
       $data['rol']=$_POST['rol'];

       $data['nombreUsuario']=login($N,$CI);
       $data['contrasenia']=md5($_POST['ci']);

       $user=$this->session->userdata('nombreUsuario');
      $data['idUsuaioModifico']=$user;

          $ci=$_POST['ci'];
          $consulta=$this->usuario_model->validarUser($ci);
       if ($consulta->num_rows()>0)
      {
         
         redirect('usuarios/agregar/1','refresh');
         $data['msg']=$this->uri->segment(3);

      }
      else{
       

         $this->usuario_model->AgregarUsuario($data);
         
          redirect('usuarios/listaUsuarios','refresh');

      }




  }

   




  public function modificar()
  {

    $idusuario=$_POST['idusuario'];
    $data['infousuario']=$this->usuario_model->recuperarUsuario($idusuario);


 $data['msg2']=$this->uri->segment(3);




 $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('t/modificarUser.php',$data); //contenido
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('t/modificarUser.php',$data); //contenido
      $this->load->view('fondo/base.php');

    }










  }
  public function modificarbd ()
  {

       $idusuario=$_POST['idusuario'];

        $data['nombres']=$_POST['nombres'];
       $data['apellidoPaterno']=$_POST['apellidoPaterno'];
       $data['apellidoMaterno']=$_POST['apellidoMaterno'];
       $data['nombreUsuario']=$_POST['nombreUsuario'];
      
       $data['ci']=$_POST['ci'];
       $data['genero']=$_POST['genero'];
       $data['telefonoCelular']=$_POST['telefonoCelular'];
       $data['rol']=$_POST['rol'];

       $user=$this->session->userdata('nombreUsuario');
       $data['idUsuaioModifico']=$user;


       $lista=$this->usuario_model->ModificarUsuario($idusuario,$data);
      redirect('usuarios/listaUsuarios','refresh');


  }
 
   public function Eliminarbd()
  {
     $estado=0;
     $idusuario=$_POST['idusuario'];
     $data['estado']= $estado;
  $this->usuario_model->eliminarUsuario($idusuario,$data);
        redirect('usuarios/listaUsuarios','refresh');


  }







 


	public function validarusuario()
  
	{
		
     $nombreUsuario=$_POST['nombreUsuario'];
     $password=md5($_POST['contrasenia']);
     $consulta=$this->usuario_model->validar($nombreUsuario,$password); 
     if ($consulta->num_rows()>0)
      {
      	foreach ($consulta->result() as $row)
      	 {
      	 	$this->session->set_userdata('idusuario',$row->idusuario);
      	 	$this->session->set_userdata('nombreUsuario',$row->nombreUsuario);
      	 	$this->session->set_userdata('rol',$row->rol);
         
      		redirect('usuarios/panel','refresh');
      	 }
      }
	  else
	  {
	  	redirect('usuarios/index/1','refresh');


	  }
	}

	 public function panel()
	 {
	 	
	 	 if ($this->session->userdata('nombreUsuario')) 
      {
      
        redirect('usuarios/listaUsuarios','refresh');
      }
      else
      {
      	redirect('usuarios/index/2','refresh'); 
       }



	 }
	 public function logout()
	 {
       $this->session->sess_destroy();
       redirect('usuarios/index/3','refresh');

	 }



}