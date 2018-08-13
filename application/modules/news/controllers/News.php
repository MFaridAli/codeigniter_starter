<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Frontend_Controller {

	function __construct()
  	{
    	parent::__construct();
    	$this->load->model("news_model");
    	$this->theme();
  	}

	public function index()
	{
		$data = array();
		$this->template->title('News');
		$this->template->build('index', $data);
	}

	public function detail($title)
	{
		$data = array();
		$this->template->title('News Detail');
		$this->template->build('detail', $data);
	}

	public function category($title)
	{
		$data = array();
		$this->template->title('News Category');
		$this->template->build('category', $data);
	}
}
