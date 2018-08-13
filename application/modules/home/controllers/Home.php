<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	function __construct()
  	{
    	parent::__construct();
    	$this->load->model("home_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array();
		$this->template->title('Home');
		$this->template->build('index', $data);
	}
}
