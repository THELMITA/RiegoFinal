<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model 
{



      public function lista()
	{
		$estado=1;


		$this->db->select('*');
		$this->db->from('Agenda');
		$this->db->where('estado',$estado);
		return $this->db->get();
	}



	public function recuperarAgenda($idAgenda)
	{
		$this->db->select('*');
		$this->db->from('agenda');
		$this->db->where('idAgenda',$idAgenda);
		return $this->db->get();
	}
	public function ModificarAgenda($idAgenda,$data)
	{
		
		$this->db->where('idAgenda',$idAgenda);
		$this->db->update('agenda',$data);
		
	}
	public function AgregarAgenda($data)
	{
				
		$this->db->insert('agenda',$data);
		
	}
	







	
	public function eliminarAgenda($idagenda,$data)
	{
		

		$this->db->where('idagenda',$idagenda);
		$this->db->update('agenda',$data);
		
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
