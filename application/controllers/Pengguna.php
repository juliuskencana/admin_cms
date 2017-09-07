<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {


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
											"pages/scripts/table-datatables-managed.js",
											"global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js",
											"pages/scripts/form-input-mask.min.js",
											"global/plugins/jquery.input-ip-address-control-1.0.min.js"
										);
		// END CSS AND JS CONFIGURATION

		$this->load->model('pengguna_model');
    }


	public function DaftarPengguna(){
		// BEGIN PAGE CONFIGURATION
		if ($this->permission_model->validation_permission() == 0) {
			$this->data['page'] = "ErrorPermission";
		}else{
			$this->data['page'] = "pengguna/Daftar";
		}

		$this->data['title'] = "Pengguna";
		$this->data['breadcumb'] = array(
							   		array(
							   			"desc" => "Home",
										"link" => base_url()
									)
			  					);
		$this->data['br_ActivePage'] = "Daftar Pengguna";
		$this->data['br_PageDesc'] = "Daftar Pengguna";
		// END PAGE CONFIGURATION
		
		$this->data['user'] = $this->pengguna_model->get_all_user();

		$this->load->view('Index', $this->data);
	}

	public function TambahPengguna()	{
		// BEGIN PAGE CONFIGURATION
		if ($this->permission_model->validation_permission() == 0) {
			$this->data['page'] = "ErrorPermission";
		}else{
			$this->data['page'] = "pengguna/Tambah";
		}
		
		$this->data['title'] = "Pengguna";
		$this->data['breadcumb'] = array(
							   		array(
							   			"desc" => "Home",
										"link" => base_url()
									)
			  					);
		$this->data['br_ActivePage'] = "Tambah Pengguna";
		$this->data['br_PageDesc'] = "Tambah Pengguna";
		// END PAGE CONFIGURATION
		
		$this->data['role'] = $this->default_model->get_all('role');

		if ($this->input->server('REQUEST_METHOD') == "POST") {
			$post = $this->input->post();
			
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]|alpha_numeric');
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('phone', 'No telepon', 'integer');
			$this->form_validation->set_rules('handphone', 'Handphone', 'integer');
			$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|integer');
			$this->form_validation->set_rules('role_id', 'Role', 'required|integer');
			$this->form_validation->set_rules('birthdate', 'Tanggal Lahir', 'required');
			$this->form_validation->set_error_delimiters('<li>', '</li>');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('Index', $this->data);
			}else{
				echo "<pre>";
				var_dump($post);
				die();
				$data = array(
					'role_id' => $post['role_id'], 
					'username' => $post['username'], 
					'password' => sha1($post['username']), 
					'first_name' => $post['first_name'], 
					'last_name' => $post['last_name'], 
					'email' => $post['email'], 
					'phone' => $post['phone'], 
					'handphone' => $post['handphone'], 
					'gender' => $post['gender'], 
					'birthdate' => date('Y-m-d', strtotime($post['birthdate'])), 
					'address' => $post['address'],
					'token' => sha1($post['username']), 
					'register_date' => date('Y-m-d H:i:s'), 
					'is_activated' => 1
					);

				$this->default_model->insert('user', $data);
			}
		}else{
			$this->load->view('Index', $this->data);
		}
	}
}
