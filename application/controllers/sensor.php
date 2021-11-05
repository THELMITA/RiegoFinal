
		
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor extends CI_Controller {
 
	public function index()
	{
   
        $lista=$this->sensor_model->lista();
    $data['sensor']=$lista;
    
    
    


    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/sensorC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('agenda/sensorC.php',$data);
      $this->load->view('fondo/base.php');

    }












		
      

     

	}
  

     public function control()
  {


        $lista=$this->sensor_model->control();
    $data['control']=$lista;

    
     

    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('control/control.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('control/control.php',$data);
      $this->load->view('fondo/base.php');

    }






        
      
       

    
    
  }

  public function prendido()
  {
     $estado=1;
     $idcontro=1;
     $data['estado']= $estado;
  $this->sensor_model->controlE($idcontro,$data);
        redirect('sensor/control','refresh');
    
    
    
  }
  public function apagado()
  {
     $estado=0;
     $idcontro=1;
     $data['estado']= $estado;
  $this->sensor_model->controlE($idcontro,$data);
        redirect('sensor/control','refresh');
    
    
    
  }




  


   public function controlAgregar()
  {
      
    
       $data['agenda_idAgenda']=$_POST['idAgenda'];
       $data['agenda_usuario_idUsuario']=$_POST['idusuario'];
       $data['inicio']=$_POST['inicio'];
       $data['fin']=$_POST['fin'];
      
      

         $this->riego_model->AgregarRiego($data);

        
   $idAgenda=$_POST['idAgenda'];
        $lista=$this->riego_model->lista($idAgenda);
    $data['riego']=$lista;
    
    
    

    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');

    }


       
       


    
  }


  public function agregarbd()
  {
  


       $data['agenda_idAgenda']=$_POST['idAgenda'];
       $data['agenda_usuario_idUsuario']=$_POST['idusuario'];
       $data['inicio']=$_POST['inicio'];
       $data['fin']=$_POST['fin'];
      
      

         $this->riego_model->AgregarRiego($data);

        
   $idAgenda=$_POST['idAgenda'];
        $lista=$this->riego_model->lista($idAgenda);
    $data['riego']=$lista;
    
    

    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');

    }

    

      


      




  }

   




  public function modificar()
  {

    $idRiego=$_POST['idRiego'];
    $data['info']=$this->riego_model->recuperarRiego($idRiego);




    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/riegoModificar.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('agenda/riegoModificar.php',$data);
      $this->load->view('fondo/base.php');

    }





    
    

       

  }
  public function modificarbd ()
  {

       $idRiego=$_POST['idRiego'];

         
      
       $data['inicio']=$_POST['inicio'];
       $data['fin']=$_POST['fin'];


       $lista=$this->riego_model->ModificarRiego($idRiego,$data);



         
   $idAgenda=$_POST['idAgenda'];
        $lista=$this->riego_model->lista($idAgenda);
    $data['riego']=$lista;
    
    

    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');

    }



    

     

    




  }
 
   public function Eliminarbd()
  {
     $estado=0;
     $idSensor=$_POST['idSensor'];
     $data['estado']= $estado;
  $this->sensor_model->eliminarSensor($idSensor,$data);
        redirect('sensor/index','refresh');
    
    
    
  }



  public function vistaUsuarios()
  {
    $lista=$this->usuario_model->lista();
    $data['usuario']=$lista;


    $this->load->view('inc_head.php');    //archivos de cabecera
 
    $this->load->view('pUsuario.php',$data); //contenido
    $this->load->view('inc_footer.php');  //archivos del footer
  }







	public function validarusuario()
  
	{
		
     $login=$_POST['nombreUsuario'];
     $password=md5($_POST['contrasenia']);
     $consulta=$this->usuario_model->validar($login,$password); 
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