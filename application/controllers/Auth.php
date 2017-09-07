<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->data['title'] = "Administration Login";
		$this->load->model('login_model');
    }


	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('dasbor');
		}
		
		if ($this->input->post()) {
			$post = $this->input->post();
			// LOGIN
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_error_delimiters('<li>', '</li>');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('Login', $this->data);
			}
			else{
				$check_login = $this->login_model->check_login($post);
				if ($check_login == true)
				{
					$session = array(
	                   'user_id' 	=> $check_login->id,
	                   'username'	=> $check_login->username,
	                   'name'		=> $check_login->first_name,
	                   'role'		=> $check_login->role_id,
	                   'logged_in' 	=> TRUE
	                );

					$this->session->set_userdata($session);
					redirect('dasbor');
				}
				else
				{
	                $this->session->set_flashdata('error', 'Username and / or Password wrong');
	                redirect(base_url('auth'));
				}
			}
		}else{
			$this->load->view('Login', $this->data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}
}
