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

	public function validate($data)
	{// 	1. The field name - the exact name you’ve given the form field.
	// 		2. A “human” name for this field, which will be inserted into the error message. For example, if your field is named “user” you might give it a human name of “Username”.
	// 		3. The validation rules for this form field.
	// 		4. (optional) Set custom error messages on any rules given for current field. If not provided will use the default one.

		// $this->form_validation->set_rules('param1','param2','param3','param4');
	}	
}