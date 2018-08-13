<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Frontend_Controller {

	function __construct()
  	{
    	parent::__construct();
    	$this->load->model("product_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array(); 
		$this->template->title('Product');
		$this->template->build('index', $data);
	}

	public function detail($title)
	{
		$data = array();
		$this->template->title('Product Detail');
		$this->template->build('detail', $data);
	}
}
