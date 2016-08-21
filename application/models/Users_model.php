<?php

class Users_model extends CI_model
{
	protected $table = "users";

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function retrieve($data)
	{
		return $this->db->get($this->table)->result_array();
	}

	public function update($data)
	{
		return $this->db->update($this->table,$data);
	}

	public function delete($data)
	{
		return $this->db->delete($this->table, $data);
	}	
}