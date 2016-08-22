<?php
class Users_model extends CI_model
{
	protected $table = "users";

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function retrieve($firstname=FALSE, $middlename=FALSE, $lastname=FALSE)
	{
		if($firstname){
			$this->db->where('firstname =',$firstname);
		}
		if($middlename){
			$this->db->where('middlename =',$middlename);
		}
		if($lastname){
			$this->db->where('lastname =',$lastname);
		}
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