<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riego_model extends CI_Model 
{

 

      public function lista($idagenda)
	{
		$estado=1;


		$this->db->select('*');
		$this->db->from('riego');
		$this->db->where('estado',$estado);
		$this->db->where('idagenda',$idagenda);
		
		return $this->db->get();
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
	







	
	public function eliminarRiego($idRiego,$data)
	{
		

		$this->db->where('idRiego',$idRiego);
		$this->db->update('riego',$data);
		
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
