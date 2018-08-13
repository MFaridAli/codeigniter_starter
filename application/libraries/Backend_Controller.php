<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
    $this->load->model('backend_model');
	}

    public function theme()
    {
      $data = array();
      /************************************************
       * Set the template view to use
       *************************************************/
      // set the theme 'default_theme' is a dir name where you put your theme file
      $this->template->set_theme('default_theme');

      // set the layout 'backend' is the file name resided in application/themes/default_theme/views/layouts/
      $this->template->set_layout('backend' . '/default');

      // load the header blocks
      $this->template->set_partial('head','partials/admin/head');      

      // load the menu blocks            
      $this->template->set_partial('header','partials/admin/header', $data);

      // load the sidebar blocks            
      $this->template->set_partial('sidebar','partials/admin/sidebar', $data);

      // load the footer blocks
      $this->template->set_partial('footer','partials/admin/footer', $data);
      
      return $this;
    }
}