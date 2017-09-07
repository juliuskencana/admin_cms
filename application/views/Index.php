<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ($this->session->userdata('logged_in') != TRUE) {
    redirect(base_url());
}
$this->load->view("_template/Header");
$this->load->view($page);
$this->load->view("_template/Footer");