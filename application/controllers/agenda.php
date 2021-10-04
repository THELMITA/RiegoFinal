
		
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
 
	public function index()
	{ 
    $data['msg']=$this->uri->segment(3);  
		
      $lista=$this->agenda_model->lista();
    $data['d']=$lista;

    $rol=$this->session->userdata('rol');
    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/cuerpo.php',$data);
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

   

  public function listaUsuarios()
  {
    $lista=$this->usuario_model->lista();
    $data['usuario']=$lista;


   /* $this->load->view('inc_head.php');    //archivos de cabecera
    $this->load->view('menu.php');
    $this->load->view('pUsuario',$data); 
    $this->load->view('inc_footer.php');  //archivos del footer*/





    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('t/cuerpo.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('t/cuerpo.php',$data);
      $this->load->view('fondo/base.php');

    }



      



  }



   public function agregar()
  {

       $data['msg2']=$this->uri->segment(3);
   


       $rol=$this->session->userdata('rol');


       if($rol=="admin"){
   
         $this->load->view('fondo/cabeza.php'); 
         $this->load->view('fondo/menuadmin.php');
         $this->load->view('agenda/agregarAgenda.php',$data); //contenido
         $this->load->view('fondo/base.php');
       }
       else
       {
   
         $this->load->view('fondo/cabeza.php'); 
         $this->load->view('fondo/menuUser.php');
         $this->load->view('agenda/agregarAgenda.php',$data); //contenido
         $this->load->view('fondo/base.php');
   
       }
   


  }

  


  public function agregarbd()
  {

    $user=$this->session->userdata('nombreUsuario');
      $data['idUsuaioModifico']=$user;
        $data['idcultivo']=1;
       

       $data['dia']=$_POST['dia'];
       $data['recordatorio']=$_POST['recordatorio'];
       $data['tipo']=$_POST['tipo']; 


       

       
 
          
        /*  $consulta=$this->usuario_model->validarUser($login);
      if ($consulta->num_rows()>0)
      {
        
         redirect('usuarios/agregar/1','refresh');
         $data['msg']=$this->uri->segment(3);

      }
      else{
       

         $this->usuario_model->AgregarUsuario($data);
          redirect('usuarios/listaUsuarios','refresh');

      }*/

         $this->agenda_model->AgregarAgenda($data);
          redirect('agenda/index','refresh');



  }

   




  public function modificar()
  {
    $data['msg2']=$this->uri->segment(3);
   
    $idAgenda=$_POST['idagenda'];
    $data['info']=$this->agenda_model->recuperarAgenda($idAgenda);


 $data['msg2']=$this->uri->segment(3);



 $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('agenda/modiAgenda.php',$data); //contenido
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('agenda/modiAgenda.php',$data); //contenido
      $this->load->view('fondo/base.php');

    }





   
  }
  public function modificarbd ()
  {

       $idAgenda=$_POST['idagenda'];

       $user=$this->session->userdata('nombreUsuario');
       $data['idUsuaioModifico']=$user;
         $data['idcultivo']=1;
        
 
        $data['dia']=$_POST['dia'];
        $data['recordatorio']=$_POST['recordatorio'];
        $data['tipo']=$_POST['tipo']; 
 


       $lista=$this->agenda_model->ModificarAgenda($idAgenda,$data);
    redirect('agenda/index','refresh');


  }
 
   public function Eliminarbd()
  {
     $estado=0;
     $idagenda=$_POST['idagenda'];
     $data['estado']= false;
  $this->agenda_model->eliminarAgenda($idagenda,$data);
        redirect('agenda/index','refresh');

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

	 


}