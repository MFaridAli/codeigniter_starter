<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Frontend_Controller {

	function __construct()
  	{
    	parent::__construct();
    	$this->load->model("about_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array();
		$this->template->title('About Us');
		$this->template->build('index', $data);
	}
}
