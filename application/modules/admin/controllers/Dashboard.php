<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Controller {

	function __construct()
  	{
    	parent::__construct();
		// $this->load->model("admin_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array();
		$this->template->title('Admin Dashboard');
		$this->template->build('index', $data);
	}
}
