<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pengguna_model extends CI_Model {

	public function get_all_user() {

		$this->db->select('*');
		$this->db->from('user');

		$this->db->order_by('username', 'asc');
        $this->db->join('role', 'role.id = user.role_id');

		$query = $this->db->get();
		return $query->result();
	}
}

