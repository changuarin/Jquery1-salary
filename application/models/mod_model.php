<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_model extends CI_Model {

	public function get_salary($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('salary');

		return $query->row();
	}
	public function getSalary()
	{
		//$this->db->where('id', $id);
		$query = $this->db->get('salary');

		return $query->result();
	}
}	