<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}

	public function index()
	{
		$this->load->view('home');

		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('middlename', 'Middlename', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('contact_number', 'Contact_number', 'required');
		$this->form_validation->set_rules('account_type', 'Account_type', 'required');
	}

}
