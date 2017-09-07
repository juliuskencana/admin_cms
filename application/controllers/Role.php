<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {


	// TODO
	// - Ganti Role
	// - Hapus User
	// - Ganti status aktif
	// - Tambah User
	public function __construct()
    {
        parent::__construct();
		// BEGIN CSS AND JS CONFIGURATION
		$this->data['page_plugin_css'] = array(
											"global/plugins/datatables/datatables.min.css",
											"global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"
										);
		$this->data['page_plugin_js'] = array(
											"global/scripts/datatable.js",
											"global/plugins/datatables/datatables.min.js",
											"global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js",
											"pages/scripts/table-datatables-managed.js"
										);

		// END CSS AND JS CONFIGURATION

		$this->load->model('pengguna_model');
    }


	public function DaftarRole()
	{
		// BEGIN PAGE CONFIGURATION
		if ($this->permission_model->validation_permission() == 0) {
			$this->data['page'] = "ErrorPermission";
		}else{
			$this->data['page'] = "role/Daftar";
		}

		$this->data['title'] = "Role";
		$this->data['breadcumb'] = array(
							   		array(
							   			"desc" => "Home",
										"link" => base_url()
									)
			  					);
		$this->data['br_ActivePage'] = "Daftar Role";
		$this->data['br_PageDesc'] = "Daftar Role";
		// END PAGE CONFIGURATION
		
		$this->data['role'] = $this->default_model->get_all('role');

		$this->load->view('Index', $this->data);
	}


	public function TambahRole()
	{
		// BEGIN PAGE CONFIGURATION
		if ($this->permission_model->validation_permission() == 0) {
			$this->data['page'] = "ErrorPermission";
		}else{
			$this->data['page'] = "role/Tambah";
		}
		
		$this->data['title'] = "Role";
		$this->data['breadcumb'] = array(
							   		array(
							   			"desc" => "Home",
										"link" => base_url()
									)
			  					);
		$this->data['br_ActivePage'] = "Tambah Role";
		$this->data['br_PageDesc'] = "Tambah Role";
		// END PAGE CONFIGURATION
		
		$this->load->view('Index', $this->data);
	}
}
