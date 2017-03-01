<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	public function __construct() {
		parent::__construct();
		//Do your magic here
	}

	public function login_user($username, $password) {

		$this->db->where([
			'username' => $username,
			'password' => $password
		]);

		$query = $this->db->get('ci_users');

		if ($query->num_rows() == 1) {

			$result = $query->row(0)->u_idx;
			return $result;
		} else {

			return false;
		}
	}
}

/* End of file Users_m.php */
/* Location: ./application/models/Users_m.php */