<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Permission_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->role_id = $this->session->userdata('role');
    }

    public function get_permission() 
    {
        $this->db->select('*');
        $this->db->from('permission');
        $this->db->where('role_id', $this->role_id);
        
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as $row) {
            $menu_id[] = $row->menu_id;   
        }
        return $menu_id;
    }

    public function get_function_now($class, $function) 
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('active', $class);
        $this->db->where('active_child', $function);
        
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    // public function get_menu_show() 
    // {
    //     $this->db->select('*');
    //     $this->db->from('menu_show');
    //     $this->db->where('role_id', $this->role_id);
        
    //     $query = $this->db->get();
    //     $result = $query->result();
    //     foreach ($result as $row) {
    //         $menu_id[] = $row->menu_id;   
    //     }
    //     return $menu_id;
    // }

    public function validation_permission() 
    {
        $class = ucfirst($this->uri->segment(1));
        $function = ucfirst($this->uri->segment(2));
        if ($function == "") {
            $function = NULL;
        }
        $this_menu = $this->get_function_now($class, $function);
        $menu_id_available = $this->get_permission();
        $status = 0;
        if (empty($this_menu)) {
            $status = 0;
        }else{
            if (in_array($this_menu->id, $menu_id_available) || in_array("all", $menu_id_available)){
                $status = 1;
            }
        }

        return $status;
    }
}

