<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor_model extends CI_Model 
{

 

     public function lista()
	{
		$estado=1;


		$this->db->select('*');
		$this->db->from('sensor');
		$this->db->where('estado',$estado);
		return $this->db->get();
	}

 public function control()
	{
		


		$this->db->select('*');
		$this->db->from('control');
		
		return $this->db->get();
	}



	public function controlE($idcontrol,$data)
	{
		

		$this->db->where('idcontrol',$idcontrol);
		$this->db->update('control',$data);
		
	}




	public function recuperarRiego($idRiego)
	{
		$this->db->select('*');
		$this->db->from('riego');
		$this->db->where('idRiego',$idRiego);
		return $this->db->get();
	}
	public function ModificarRiego($idRiego,$data)
	{
		
		$this->db->where('idRiego',$idRiego);
		$this->db->update('riego',$data);
		
	}
	public function AgregarRiego($data)
	{
				
		$this->db->insert('riego',$data);
		
	}
	







	
	public function eliminarSensor($idSensor,$data)
	{
		

		$this->db->where('idSensor',$idSensor);
		$this->db->update('sensor',$data);
		
	}






	public function validar($login,$password)
	{


		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('nombreUsuario',$login);
		$this->db->where('contrasenia',$password);
		return $this->db->get();
		
	}

	public function validarUser($User)
	{


		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('nombreUsuario',$User);
		
		return $this->db->get();
		
	}
	
	
	
}
