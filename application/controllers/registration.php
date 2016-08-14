<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// echo "<h1>Testing</h1>";
		$this->load->view('registration');
	}
}
