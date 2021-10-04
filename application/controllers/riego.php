
		
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riego extends CI_Controller {
 
	public function index()
	{
    $data['msg']=$this->uri->segment(3);
   
    //$idagenda=$this->session->userdata('idagenda');
     $idagenda=$_POST['idagenda'];
        $lista=$this->riego_model->lista($idagenda);
    $data['riego']=$lista;

    
    
     
    
    $data['idagenda'] =$_POST['idagenda'];
     //$data['idagenda'] =$idagenda;



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
  

   

  


   public function agregar()
  {
      
    
    
  }


  public function agregarbd()
  {
  
  $d=0;
 
     
    $data1['msg']=$this->uri->segment(3);


    $idagenda=$_POST['idagenda'];  
         if( limiteHora($_POST['inicio'],$_POST['fin'])=="si" )
         {

          $consulta2=$this->riego_model->lista($idagenda);  

          if($consulta2->num_rows()>0)         
          {
            foreach ($consulta2->result() as $row)
            {
              
              //$this->session->set_userdata('nombreUsuario',$row->nombreUsuario);
             $iniL=$row->inicio;
             $finL=$row->fin;
            
                 if(( compararH($_POST['inicio'],$_POST['fin'],$iniL,$finL))=="si" )
                 {
                      
                
                  $d=1;
                
                 }
                 else{
  
           
  
                   
                  $d=0;
                  $data1['msg']="4";
                 
                 
  
                 }//else
                
           
            }//foreac





            if( $d==1)
            {
              $lista=$this->riego_model->lista($idagenda);           
              $data['idagenda']=$_POST['idagenda'];       
              $data['inicio']=$_POST['inicio'];
              $data['fin']=$_POST['fin'];        
              $user=$this->session->userdata('nombreUsuario');
              $data['idUsuaioModifico']=$user;
              $this->riego_model->AgregarRiego($data);


            }
            else{
  
           
  
                   
              $d=0;
              $data1['msg']="4";
             
             

             }//else
  




          }//if rou
          else{

  
            $lista=$this->riego_model->lista($idagenda);           
            $data['idagenda']=$_POST['idagenda'];       
            $data['inicio']=$_POST['inicio'];
            $data['fin']=$_POST['fin'];        
            $user=$this->session->userdata('nombreUsuario');
            $data['idUsuaioModifico']=$user;
            $this->riego_model->AgregarRiego($data);
  
           



          }

      

          
                    
        
          





         }
         else{


          $data1['msg']="2";
         }

        



   $idagenda=$_POST['idagenda'];
        $lista=$this->riego_model->lista($idagenda);
    $data['riego']=$lista;
    
    


    $rol=$this->session->userdata('rol');
   
    
   

 

    


    if($rol=="admin"){
      
      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php', $data1);
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {
      
      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php',$data1);
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
    $data1['msg']=$this->uri->segment(3);
       $idRiego=$_POST['idRiego'];

         
      
       $data['inicio']=$_POST['inicio'];
       $data['fin']=$_POST['fin'];


       $lista=$this->riego_model->ModificarRiego($idRiego,$data);



         
   $idagenda=$_POST['idagenda'];
        $lista=$this->riego_model->lista($idagenda);
    $data['riego']=$lista;
    
    
    $rol=$this->session->userdata('rol');

 
    
    if($rol=="admin"){
      
      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php', $data1);
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {
      
      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php',$data1);
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');

    }









      
        
     




  }
 
   public function Eliminarbd()
  {
    $data1['msg']=$this->uri->segment(3);
     $estado=0;
     $idRiego=$_POST['idRiego'];
     $data['estado']= $estado;
  $this->riego_model->eliminarRiego($idRiego,$data);
       
      
   $idAgenda=$_POST['idagenda'];
        $lista=$this->riego_model->lista($idAgenda);
    $data['riego']=$lista;
    
    
    
    $rol=$this->session->userdata('rol');


   

    if($rol=="admin"){
      
      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php', $data1);
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');
    }
    else
    {
      
      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php',$data1);
      $this->load->view('agenda/riegoC.php',$data);
      $this->load->view('fondo/base.php');

    }





 

      
        
      
  

  }



  public function vistaUsuarios()
  {
    $lista=$this->usuario_model->lista();
    $data['usuario']=$lista;


    $rol=$this->session->userdata('rol');


    if($rol=="admin"){

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuadmin.php');
      $this->load->view('pUsuario.php',$data); //contenido
      $this->load->view('fondo/base.php');
    }
    else
    {

      $this->load->view('fondo/cabeza.php'); 
      $this->load->view('fondo/menuUser.php');
      $this->load->view('pUsuario.php',$data); //contenido
      $this->load->view('fondo/base.php');

    }





   
   
   
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