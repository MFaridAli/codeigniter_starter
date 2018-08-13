<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Frontend_Controller {

	function __construct()
  	{
    	parent::__construct();
    	$this->load->model("contact_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array();
		$this->template->title('Contact Us');
		$this->template->build('index', $data);
	}
}
