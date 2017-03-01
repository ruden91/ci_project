<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	public function __construct() {
		parent::__construct();
		//Do your magic here
	}
	
	public function get_users($user_id="", $username="") {

		$this->db->where([
			'u_idx' => $user_id,
			'username' => $username
		]);

		$query = $this->db->get('ci_users');
		$result = $query->result_array();
		return $result;
	}

	/**
	 * [create_user description]
	 */
	public function create_user($data=array()) {
		$this->db->insert('ci_users', $data);
	}

	/**
	 * [update_user description]
	 */
	public function update_user($data=array(), $u_idx) {

		$this->db->where(['u_idx' => $u_idx]);
		$this->db->update('ci_users', $data);
	}

	public function delete_user($u_idx) {

		$this->db->where(['u_idx' => $u_idx]);
		$this->db->delete('ci_users');
	}
}

/* End of file Users_m.php */
/* Location: ./application/models/Users_m.php */