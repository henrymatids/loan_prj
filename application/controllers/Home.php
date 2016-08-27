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
	}
}
