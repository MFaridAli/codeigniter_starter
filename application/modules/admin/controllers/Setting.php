<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends Backend_Controller {

	function __construct()
  	{
    	parent::__construct();
    	// $this->load->model("admin_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array();
		$this->template->title('Setting');
		$this->template->build('setting', $data);
	}
}
