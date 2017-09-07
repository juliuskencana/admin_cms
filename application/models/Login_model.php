<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {

    public function check_username($post) 
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role', 'role.id = user.role_id');
        $this->db->join('permission', 'permission.role_id = role.id');
        $this->db->where('user.username', $post['username']);
        
        $query = $this->db->get();
        return $query->row();
    }

    public function check_login($post)
    {
        $check_username = $this->check_username($post);
        if ($check_username) {
            if ($check_username->is_activated == 1) 
            {
                if ($check_username->password == sha1($post['password']))
                {
                    return $check_username;
                }
                else
                {
                    $this->session->set_flashdata('error', 'Invalid Username Or Password');
	                redirect(base_url('auth'));
                }
            }
            else
            {
                $this->session->set_flashdata('error', 'User not activated');
                redirect(base_url('auth'));
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Invalid Username Or Password');
            redirect(base_url('auth'));
        }
    }
}

