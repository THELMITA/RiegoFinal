<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model 
{


      public function lista()
	{
		$estado=1;


		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('estado',$estado);
		return $this->db->get();
	}
	public function recuperarUsuario($idusuario)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idusuario',$idusuario);
		return $this->db->get();
	}
	public function ModificarUsuario($idusuario,$data)
	{
		
		$this->db->where('idusuario',$idusuario);
		$this->db->update('usuario',$data);
		
	}
	public function AgregarUsuario($data)
	{
				
		$this->db->insert('usuario',$data);
		
	}
	







	
	public function eliminarUsuario($idusuario,$data)
	{
		

		$this->db->where('idusuario',$idusuario);
		$this->db->update('usuario',$data);
		
	}






	public function validar($login,$password)
	{


		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('nombreUsuario',$login);
		$this->db->where('contrasenia',$password);
		return $this->db->get();
		
	}
	

	public function validarUser($ci)
	{


		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('ci',$ci);
		
		return $this->db->get();
		
	}
	
	
	
}
