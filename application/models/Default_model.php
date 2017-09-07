<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Default_model extends CI_Model {

	public function get_by($table, $field, $value, $order_by = 'id', $order = 'asc', $return_type = 'row', $operator = 'where') {

		$this->db->select('*');
		$this->db->from($table);

		$this->db->$operator($field, $value);
		$this->db->order_by($order_by, $order);

		$query = $this->db->get();
		
		switch($return_type) {
			case 'row':
					return $query->row();
				break;

			case 'result':
					return $query->result();
				break;
		}
	}

	public function get_by_array($table, $value, $order_by = 'id', $order = 'asc', $return_type = 'row', $operator = 'where') {

		$this->db->select('*');
		$this->db->from($table);

		$this->db->$operator($value);
		$this->db->order_by($order_by, $order);

		$query = $this->db->get();
		
		switch($return_type) {
			case 'row':
					return $query->row();
				break;

			case 'result':
					return $query->result();
				break;
		}
	}

	public function get_all($table) {

		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}

	public function update($id, $new) {

		$this->db->where('admin_id', $id);

		return $this->db->update('admin', $new);
	}

	public function insert($table, $data) {
		return $this->db->insert($table, $data);
	}
}

