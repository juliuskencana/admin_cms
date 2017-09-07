<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		// BEGIN CSS AND JS CONFIGURATION
		$this->data['page_plugin_css'] = array(
											"global/plugins/bootstrap-fileinput/bootstrap-fileinput.css",
											"pages/css/contact.min.css"
										);
		$this->data['page_plugin_js'] = array(
											"global/plugins/bootstrap-fileinput/bootstrap-fileinput.js",
											"global/plugins/jquery.sparkline.min.js",
											"pages/scripts/contact.min.js"
										);

		// END CSS AND JS CONFIGURATION
    }


	public function index()
	{
		// BEGIN PAGE CONFIGURATION
		if ($this->permission_model->validation_permission() == 0) {
			$this->data['page'] = "ErrorPermission";
		}else{
			$this->data['page'] = "About";
		}
		
		$this->data['title'] = "Tentang IREN";
		$this->data['breadcumb'] = array(
							   		array(
							   			"desc" => "Home",
										"link" => base_url()
									)
			  					);
		$this->data['br_ActivePage'] = "Tentang Aplikasi IREN";
		$this->data['br_PageDesc'] = "About";
		// END PAGE CONFIGURATION
		

		$this->load->view('Index', $this->data);
	}
}
